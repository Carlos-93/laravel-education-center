<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;

class DeleteUser extends ModalComponent
{
    public int|User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function delete()
    {
        $this->user->delete();
        $this->closeModal();
        session()->flash('message', 'User deleted successfully.');
        return redirect()->route('user-management');
    }

    public function render()
    {
        return view('livewire.delete-user');
    }
}