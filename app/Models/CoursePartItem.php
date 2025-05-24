<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CoursePartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_part_id',
        'title',
        'lesson_number',
        'duration',
        'content'
    ];

    public function part()
    {
        return $this->belongsTo(CoursePart::class, 'course_part_id');
    }
}
