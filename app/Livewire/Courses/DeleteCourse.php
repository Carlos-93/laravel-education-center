<?php

namespace App\Livewire\Courses;

use LivewireUI\Modal\ModalComponent;
use App\Models\Course;

class DeleteCourse extends ModalComponent
{
    public $courseId;
    public $courseTitle;

    public function mount($courseId)
    {
        $this->courseId = $courseId;
        $course = Course::find($this->courseId);

        if ($course) {
            $this->courseTitle = $course->title;
        } else {
            session()->flash('error', 'Course not found');
            $this->closeModal();
            return redirect()->route('courses');
        }
    }

    public function delete()
    {
        $course = Course::find($this->courseId);

        if ($course) {
            $course->delete();
            session()->flash('message', 'Course deleted successfully');
        } else {
            session()->flash('error', 'Course not found');
        }

        $this->closeModal();
        return redirect()->route('courses');
    }

    public function render()
    {
        return view('livewire.courses.delete-course', [
            'courseTitle' => $this->courseTitle,
        ]);
    }
}