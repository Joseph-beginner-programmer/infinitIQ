<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'description', 'instructor_id', 'category_id', 'length_value', 'length_unit', 'level'];

    public function parts()
    {
        return $this->hasMany(Course_Part::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
