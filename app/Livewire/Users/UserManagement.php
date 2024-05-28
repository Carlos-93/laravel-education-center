<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.users.user-management');
    }
}