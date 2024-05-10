<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teachers', 'course_id', 'user_id');
    }

    public function resources()
    {
        return $this->hasMany(Resources::class);
    }
}
