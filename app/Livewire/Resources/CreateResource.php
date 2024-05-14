<?php

namespace App\Livewire\Resources;

use App\Models\Course;
use App\Models\Resources;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;
use Livewire\WithFileUploads;

class CreateResource extends ModalComponent
{
    use WithFileUploads;

    public $courseId, $title, $resource_type, $file, $content, $path;
    public $course, $resources;

    public function mount($courseId)
    {
        $this->courseId = $courseId;
        $this->course = Course::find($courseId);
    }

    public function saveResource()
    {
        $this->validate([
            'title' => 'required',
            'resource_type' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:10240',
            'content' => 'required',
        ]);

        $this->path = $this->file->store('public/resources');

        Resources::create([
            'course_id' => $this->course->id,
            'title' => $this->title,
            'resource_type' => $this->resource_type,
            'url' => $this->path,
            'content' => $this->content,
            'uploaded_by' => Auth::user()->id,
        ]);

        session()->flash('message', 'Resource created successfully.');

        $this->cleanUpUploads();

        return redirect()->route('courses.course-details', $this->course->id);
    }

    public function cleanUpUploads()
    {
        $storage = Storage::disk('local');

        $storage->deleteDirectory('livewire-tmp');
    }

    public function render()
    {
        return view('livewire.resources.create-resource');
    }
}
