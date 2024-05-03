<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class UpdateUser extends ModalComponent
{
    public int|User $user;
    public $roles, $name, $email, $selectedRole, $password, $password_confirmation;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->roles = Role::all();

        $this->name = $user->name;
        $this->email = $user->email;
        $this->selectedRole = $user->role;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user->id)],
            'selectedRole' => 'required',
            'password' => 'nullable|min:6|same:password_confirmation',
        ]);

        if ($this->password) {
            User::where('id', $this->user->id)->update([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->selectedRole,
                'password' => bcrypt($this->password)
            ]);
        } else {
            User::where('id', $this->user->id)->update([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->selectedRole,
            ]);
        }

        session()->flash('message', 'User updated successfully.');
        return redirect()->route('user-management');
    }

    public function render()
    {
        return view('livewire.update-user');
    }
}