<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseManagement extends Component
{
    public $courses;
    public $title, $description, $teacher_id;

    public function mount()
    {
        $this->courses = Course::all();
    }

    public function render()
    {
        return view('livewire.course-management');
    }

    public function saveCourse()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'required|exists:users,id'
        ]);

        Course::create([
            'title' => $this->title,
            'description' => $this->description,
            'teacher_id' => $this->teacher_id,
        ]);

        $this->title = '';
        $this->description = '';
        $this->teacher_id = '';

        $this->courses = Course::all();
    }
}
