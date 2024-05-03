<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $showModal = false;
    public $title = '';
    public $content = '';

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}