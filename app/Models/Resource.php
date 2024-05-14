<?php

namespace App\Models;

use App\Livewire\Courses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'resource_type',
        'file',
        'content',
        'uploaded_by',
        'url'
    ];
}
