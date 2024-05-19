<?php

namespace App\Livewire\Games;

use Livewire\Component;
use App\Models\EducationalGame;

class EducationalGames extends Component
{

    public $games;

    public function mount()
    {
        $this->games = EducationalGame::all();
    }

    public function render()
    {
        return view('livewire.games.educational-games');
    }
}
