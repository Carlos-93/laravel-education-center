<?php

namespace App\Livewire\Users;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class DeleteUser extends ModalComponent
{
    /** @var User|array */
    public $users;

    public function mount($users)
    {
        // Convertir la entrada a una colección de usuarios si no lo es
        $this->users = is_array($users) ? User::findMany($users) : collect([User::find($users)]);
    }

    public function delete()
    {
        foreach ($this->users as $user) {
            $user->delete();
        }

        $this->closeModal();
        session()->flash('message', 'User(s) deleted successfully.');
        return redirect()->route('user-management');
    }

    public function render()
    {
        return view('livewire.users.delete-user', ['users' => $this->users]);
    }
}