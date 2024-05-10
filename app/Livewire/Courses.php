<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\CourseEnrollment;
use App\Models\User;
use Livewire\Component;

class Courses extends Component
{
    // Courses
    public $allCourses, $enrolledCourses, $notEnrolledCourses;

    // Teachers
    public $allTeachers;

    // Modal
    public $courseId, $title, $description, $teachers = [];
    public $isModalOpen = false;
    public $isUpdating = false;

    public function mount()
    {
        $this->allCourses = Course::all();
        $this->allTeachers = User::where('role', 'teacher')->get();

        // Get the course ids that the user is enrolled in
        $enrolledCourseIds = CourseEnrollment::where('user_id', auth()->user()->id)->pluck('course_id');

        $this->enrolledCourses = $this->allCourses->whereIn('id', $enrolledCourseIds);
        $this->notEnrolledCourses = $this->allCourses->whereNotIn('id', $enrolledCourseIds);
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    // Create and store
    public function create()
    {
        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'teachers' => 'required'
        ]);

        $course = Course::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $course->teachers()->attach($this->teachers);

        session()->flash('message', 'Course created successfully.');

        $this->closeModal();
        $this->reset(['title', 'description', 'teachers']);
        $this->mount();
    }

    // Update and edit
    public function edit($courseId)
    {
        $course = Course::findOrFail($courseId);
        $this->courseId = $courseId;
        $this->title = $course->title;
        $this->description = $course->description;
        $this->teachers = $course->teachers->pluck('id')->toArray();
        $this->isModalOpen = true;
        $this->isUpdating = true;
    }

    public function update()
    {
        $course = Course::findOrFail($this->courseId);

        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'teachers' => 'required'
        ]);

        $course->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $course->teachers()->sync($this->teachers);

        session()->flash('message', 'Course updated successfully.');

        $this->reset(['title', 'description', 'teachers', 'isModalOpen', 'isUpdating']);
        $this->mount();
    }

    // Delete
    public function destroy($courseId)
    {
        Course::destroy($courseId);

        session()->flash('message', 'Course deleted successfully.');
        return redirect()->route('courses');
    }

    // Enroll and Unenroll
    public function enroll($courseId)
    {
        CourseEnrollment::create([
            'user_id' => auth()->user()->id,
            'course_id' => $courseId,
            'status' => 'enrolled'
        ]);

        session()->flash('message', 'Enrolled successfully.');
        return redirect()->route('courses');
    }

    public function unenroll($courseId)
    {
        CourseEnrollment::where('user_id', auth()->user()->id)
            ->where('course_id', $courseId)
            ->delete();

        session()->flash('message', 'Unenrolled successfully.');
        return redirect()->route('courses');
    }

    public function render()
    {
        return view('livewire.courses');
    }
}