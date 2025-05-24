<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\CoursePart;
use App\Models\CoursePartItem;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat 1 course
        $course = Course::create([
            'title' => 'UI/UX Design Fundamentals',
            'description' => 'Learn the basics of UI/UX from scratch!',
            'instructor_id' => 1,
            'category_id' => 1,
            'length_value' => 4,
            'length_unit' => 'week',
            'level' => 'beginner',
            'image' => 'uiux.png',
            'rating' => 4.7,
            'review_count' => 1523,
        ]);

        // Course Parts
        $parts = [
            [
                'title' => 'Introduction to UI/UX',
                'order' => 1,
                'description' => 'Overview of UI and UX',
                'estimated_duration' => '2 hours',
                'items' => [
                    ['title' => 'What is UI/UX?', 'lesson_number' => 1, 'duration' => '30 minutes', 'content' => 'Intro to UI/UX'],
                    ['title' => 'Why UI/UX matters', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Importance of design']
                ]
            ],
            [
                'title' => 'User Research',
                'order' => 2,
                'description' => 'Learn about user needs',
                'estimated_duration' => '3 hours',
                'items' => [
                    ['title' => 'User Interviews', 'lesson_number' => 1, 'duration' => '40 minutes', 'content' => 'Techniques and tips'],
                    ['title' => 'Persona Building', 'lesson_number' => 2, 'duration' => '50 minutes', 'content' => 'Creating user personas']
                ]
            ]
        ];

        foreach ($parts as $partData) {
            $part = CoursePart::create([
                'course_id' => $course->id,
                'title' => $partData['title'],
                'order' => $partData['order'],
                'description' => $partData['description'],
                'estimated_duration' => $partData['estimated_duration'],
            ]);

            foreach ($partData['items'] as $item) {
                CoursePartItem::create([
                    'course_part_id' => $part->id,
                    'title' => $item['title'],
                    'lesson_number' => $item['lesson_number'],
                    'duration' => $item['duration'],
                    'content' => $item['content'],
                ]);
            }
        }
    }
}
