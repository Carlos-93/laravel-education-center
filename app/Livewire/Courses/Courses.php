<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use App\Models\CourseEnrollment;
use App\Models\User;
use Livewire\Component;

class Courses extends Component
{
    public $allCourses, $enrolledCourses, $notEnrolledCourses;
    public $allTeachers;
    public $courseId, $title, $description, $teachers = [];
    public $userName;

    public function mount()
    {
        $this->userName = auth()->user()->name;
        $this->allCourses = Course::all();
        $this->allTeachers = User::where('role', 'teacher')->get();

        // Get the course ids that the user is enrolled in
        $enrolledCourseIds = CourseEnrollment::where('user_id', auth()->user()->id)->pluck('course_id');

        $this->enrolledCourses = $this->allCourses->whereIn('id', $enrolledCourseIds);
        $this->notEnrolledCourses = $this->allCourses->whereNotIn('id', $enrolledCourseIds);
    }

    public function enroll($courseId)
    {
        CourseEnrollment::create([
            'user_id' => auth()->user()->id,
            'course_id' => $courseId,
            'status' => 'enrolled'
        ]);

        session()->flash('message', 'Enrolled successfully');
        return redirect()->route('courses');
    }

    public function unenroll($courseId)
    {
        CourseEnrollment::where('user_id', auth()->user()->id)
            ->where('course_id', $courseId)
            ->delete();

        session()->flash('message', 'Unenrolled successfully');
        return redirect()->route('courses');
    }

    public function render()
    {
        return view('livewire.courses.courses', ['userName' => $this->userName]);
    }
}