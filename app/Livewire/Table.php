<?php

namespace App\Livewire;

use Livewire\Component;

class Table extends Component
{
    public $users;

    public function render()
    {
        return view('livewire.table', [
            'users' => $this->users
        ]);
    }
}