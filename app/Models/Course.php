<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
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
=======

class Course extends Model
{
    protected $fillable = ['title', 'description', 'instructor_id', 'category_id', 'length_value', 'length_unit', 'level'];

>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
    public function parts()
    {
        return $this->hasMany(CoursePart::class);
    }

<<<<<<< HEAD
    // Relasi ke instruktur (diasumsikan user)
public function instructor()
{
    return $this->belongsTo(Instructor::class, 'instructor_id');
}

    // Relasi ke kategori
=======
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
<<<<<<< HEAD
    public function users()
{
    return $this->belongsToMany(User::class)->withTimestamps()->withPivot('enrolled_at');
}
=======
>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
}
