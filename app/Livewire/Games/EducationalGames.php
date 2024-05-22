<?php

namespace App\Livewire\Games;

use Livewire\Component;
use App\Models\EducationalGame;
use App\Models\GameScore;

class EducationalGames extends Component
{
    public $games;
    public $scores;

    public function mount()
    {
        $this->games = EducationalGame::all();
        $this->scores = GameScore::with('session')->get();
    }

    public function render()
    {
        return view('livewire.games.educational-games');
    }
}