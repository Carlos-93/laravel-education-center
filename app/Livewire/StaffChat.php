<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class StaffChat extends Component
{
    public $messages;
    public $newMessage;

    protected $rules = [
        'newMessage' => 'required|max:255',
    ];

    public function mount()
    {
        $this->messages = Message::orderBy('created_at', 'asc')->get()->toArray();
    }

    public function sendMessage()
    {
        $this->validate();

        $message = Message::create([
            'user_id' => Auth::id(),
            'message' => $this->newMessage,
        ]);

        $this->messages[] = $message->toArray();

        $this->newMessage = '';

    }

    public function render()
    {
        return view('livewire.staff-chat');
    }
}
