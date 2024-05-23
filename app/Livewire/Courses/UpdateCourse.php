<?php

namespace App\Livewire\Courses;

use LivewireUI\Modal\ModalComponent;

class UpdateCourse extends ModalComponent
{
    public function render()
    {
        return view('livewire.courses.update-course');
    }
}
