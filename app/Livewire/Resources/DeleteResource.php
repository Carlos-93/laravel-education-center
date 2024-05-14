<?php

namespace App\Livewire\Resources;

use App\Models\Course;
use App\Models\Resources;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class DeleteResource extends ModalComponent
{
    public $course, $resource;

    public function mount($resourceId)
    {
        $this->course = Course::find(Resources::find($resourceId)->course_id);
        $this->resource = Resources::find($resourceId);
    }

    public function deleteResource()
    {
        Resources::destroy($this->resource->id);

        Storage::delete($this->resource->url);

        session()->flash('message', 'Resource deleted successfully.');

        redirect()->route('courses.course-details', $this->course->id);
    }

    public function render()
    {
        return view('livewire.resources.delete-resource');
    }
}
