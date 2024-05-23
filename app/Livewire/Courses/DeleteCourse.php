<?php

namespace App\Livewire\Courses;

use LivewireUI\Modal\ModalComponent;
use App\Models\Course;

class DeleteCourse extends ModalComponent
{
    public function render()
    {
        return view('livewire.courses.delete-course');
    }
}
