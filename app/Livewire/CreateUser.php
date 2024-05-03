<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class CreateUser extends ModalComponent
{
    public $name, $email, $password;
    public $roles, $selectedRole;

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'selectedRole' => 'required'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->selectedRole,
            'password' => Hash::make($this->password)
        ]);

        session()->flash('message', 'User created successfully.');
        return redirect()->route('user-management');
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}