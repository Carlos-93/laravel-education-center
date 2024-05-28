<?php

namespace App\Http\Controllers;

use App\Models\GameScore;
use App\Models\GameSession;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GameResultsController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'score' => 'required|numeric',
            'user_id' => 'required|numeric',
            'time' => 'required|numeric',
            'game_id' => 'required|numeric',
        ]);

        $score = $validated['score'];
        $userId = $validated['user_id'];
        $time = $validated['time'];
        $gameId = $validated['game_id'];

        $existingSession = GameSession::where('user_id', $userId)
            ->where('game_id', $gameId)
            ->first();

        if ($existingSession) {
            $existingSession->start_time = Carbon::now()->subSeconds($time);
            $existingSession->end_time = Carbon::now();
            $existingSession->save();

            $existingScore = GameScore::where('session_id', $existingSession->id)->first();

            if ($existingScore) {
                $existingScore->score = $score;
                $existingScore->save();
                return response()->json(['message' => 'Game result updated']);
            } else {
                GameScore::create([
                    'session_id' => $existingSession->id,
                    'score' => $score,
                ]);
                return response()->json(['message' => 'Game result saved']);
            }
        } else {
            $gameSession = GameSession::create([
                'user_id' => $userId,
                'game_id' => $gameId,
                'start_time' => Carbon::now()->subSeconds($time),
                'end_time' => Carbon::now(),
            ]);
            GameScore::create([
                'session_id' => $gameSession->id,
                'score' => $score,
            ]);
            return response()->json(['message' => 'Game result saved']);
        }
        return response()->json(['message' => 'Error updating game result'], 500);
    }
}
