<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Resources;
use Livewire\Component;

class CourseDetails extends Component
{
    public $course, $resources;

    public function mount($courseId)
    {
        $this->course = Course::find($courseId);
        $this->resources = Resources::where('course_id', $courseId)->get();
    }

    public function render()
    {
        return view('livewire.course-details');
    }
}