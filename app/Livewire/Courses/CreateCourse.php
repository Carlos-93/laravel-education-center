<?php

namespace App\Livewire\Courses;

use App\Models\Course;
use App\Models\User;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateCourse extends ModalComponent
{
    use WithFileUploads;

    public $title, $description, $teachers = [];
    public $image;
    public $allTeachers;

    public function mount()
    {
        $this->allTeachers = User::where('role', 'teacher')->get();
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'teachers' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ]);

        $imagePath = $this->image ? $this->image->store('images', 'public') : null;
        $publicImagePath = $imagePath ? 'storage/' . $imagePath : null;

        $course = Course::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $publicImagePath,
        ]);

        $course->teachers()->attach($this->teachers);

        session()->flash('message', 'Course created successfully');
        return redirect()->route('courses');
    }

    public function render()
    {
        return view('livewire.courses.create-course');
    }
}