<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CoursePart extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'order',
        'description',
        'estimated_duration'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function items()
    {
        return $this->hasMany(CoursePartItem::class);
    }
}
