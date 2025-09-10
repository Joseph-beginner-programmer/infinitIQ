<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'instructor_id',
        'category_id',
        'length_value',
        'length_unit',
        'level',
        'image',
        'rating',
        'review_count'
    ];

    // Relasi ke bagian-bagian kursus

    public function parts()
    {
        return $this->hasMany(CoursePart::class);
    }


    // Relasi ke instruktur (diasumsikan user)
public function instructor()
{
    return $this->belongsTo(Instructor::class, 'instructor_id');
}

    // Relasi ke kategori

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
{
    return $this->belongsToMany(User::class)->withTimestamps()->withPivot('enrolled_at');
}
}