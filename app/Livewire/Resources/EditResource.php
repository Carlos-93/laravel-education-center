<?php

namespace App\Livewire\Resources;

use App\Models\Resources;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class EditResource extends ModalComponent
{
    use WithFileUploads;

    public $resource, $courseId, $title, $resource_type, $file, $url, $content, $path;

    public function mount($resourceId)
    {
        $this->resource = Resources::find($resourceId);
        $this->courseId = $this->resource->course_id;

        $this->title = $this->resource->title;
        $this->resource_type = $this->resource->resource_type;
        $this->url = $this->resource->url;
        $this->content = $this->resource->content;
    }

    public function updateResource()
    {
        $rules = [
            'title' => 'required',
            'resource_type' => 'required',
            'content' => 'required',
        ];

        if ($this->file) {
            $rules['file'] = 'file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:10240';
        }

        $this->validate($rules);

        $resourceData = [
            'title' => $this->title,
            'resource_type' => $this->resource_type,
            'content' => $this->content,
            'uploaded_by' => Auth::user()->id,
        ];

        if ($this->file) {
            $resourceData['url'] = $this->file->store('public/resources');
        }

        Resources::where('id', $this->resource->id)->update($resourceData);

        if ($this->file) {
            Storage::delete($this->resource->url);
        }

        session()->flash('message', 'Resource updated successfully.');

        return redirect()->route('courses.course-details', $this->courseId);
    }


    public function render()
    {
        return view('livewire.resources.edit-resource');
    }
}
