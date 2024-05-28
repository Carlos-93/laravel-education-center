<?php

namespace App\Livewire\Courses;

use LivewireUI\Modal\ModalComponent;
use Livewire\WithFileUploads;
use App\Models\Course;
use App\Models\User;

class UpdateCourse extends ModalComponent
{
    use WithFileUploads;

    public $courseId;
    public $title;
    public $description;
    public $selectedTeachers = [];
    public $teachers;
    public $image;
    public $currentImage;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'selectedTeachers' => 'required|array',
        'selectedTeachers.*' => 'exists:users,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
    ];

    public function mount($courseId)
    {
        $this->courseId = $courseId;
        $course = Course::find($this->courseId);

        if ($course) {
            $this->title = $course->title;
            $this->description = $course->description;
            $this->selectedTeachers = $course->teachers()->pluck('users.id')->toArray();
            $this->currentImage = $course->image;
            $this->teachers = User::where('role', 'teacher')->get();
        } else {
            session()->flash('error', 'Course not found');
            $this->closeModal();
            return redirect()->route('courses');
        }
    }

    public function update()
    {
        $this->validate();

        $course = Course::find($this->courseId);

        if ($course) {
            if ($this->image) {
                $imagePath = $this->image->store('images', 'public');
                $publicImagePath = 'storage/' . $imagePath;
            } else {
                $publicImagePath = $this->currentImage;
            }

            $course->title = $this->title;
            $course->description = $this->description;
            $course->image = $publicImagePath;
            $course->save();

            $course->teachers()->sync($this->selectedTeachers);

            session()->flash('message', 'Course updated successfully');
        } else {
            session()->flash('error', 'Course not found');
        }

        $this->closeModal();
        return redirect()->route('courses');
    }

    public function render()
    {
        return view('livewire.courses.update-course');
    }
}