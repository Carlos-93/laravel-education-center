<?php

namespace App\Http\Controllers;

use App\Models\GameScore;
use App\Models\GameSession;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameResultsController extends Controller
{
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'score' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        $score = $validated['score'];
        $userId = $validated['user_id'];

        $gameSession = GameSession::create([
            'user_id' => $userId,
            'game_id' => 1,
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now(),
        ]);

        GameScore::create([
            'session_id' => $gameSession->id,
            'score' => $score,
        ]);
        
        return response()->json(['message' => 'Game result saved']);
    }
}