<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\CoursePart;
use App\Models\CoursePartItem;
use App\Models\Category;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil atau buat kategori berdasarkan nama
        $design = Category::firstOrCreate(['name' => 'Design'], ['slug' => 'design']);
        $programming = Category::firstOrCreate(['name' => 'Programming'], ['slug' => 'programming']);
        $business = Category::firstOrCreate(['name' => 'Business'], ['slug' => 'business']);
        $dataScience = Category::firstOrCreate(['name' => 'Data Science'], ['slug' => 'data-science']);
        $graphicDesign = Category::firstOrCreate(['name' => 'Graphic Design'], ['slug' => 'graphic-design']);

        $courses = [
            [
                'title' => 'UI/UX Design Fundamentals',
                'description' => 'Learn the basics of UI/UX from scratch!',
                'instructor_id' => 1,
                'category_id' => $design->id,
                'length_value' => 4,
                'length_unit' => 'week',
                'level' => 'beginner',
                'image_path_1' => 'images/web-design-1.jpg',
                'image_path_2' => 'images/web-design-2.jpg',
                'image_path_3' => 'images/web-design-3.jpg',
                'rating' => 4.7,
                'review_count' => 1523,
                'parts' => [
                    [
                        'title' => 'Introduction to UI/UX',
                        'description' => 'Overview of UI and UX',
                        'estimated_duration' => '2 hours',
                        'items' => [
                            ['title' => 'What is UI/UX?', 'lesson_number' => 1, 'duration' => '30 minutes', 'content' => 'Intro to UI/UX'],
                            ['title' => 'Why UI/UX matters', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Importance of design']
                        ]
                    ],
                    [
                        'title' => 'User Research',
                        'description' => 'Learn about user needs',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'User Interviews', 'lesson_number' => 1, 'duration' => '40 minutes', 'content' => 'Techniques and tips'],
                            ['title' => 'Persona Building', 'lesson_number' => 2, 'duration' => '50 minutes', 'content' => 'Creating user personas']
                        ]
                    ]
                ]
            ],
            // [
            //     'title' => 'Full Stack Web Development',
            //     'description' => 'Master both front-end and back-end development!',
            //     'instructor_id' => 2,
            //     'category_id' => $programming->id,
            //     'length_value' => 8,
            //     'length_unit' => 'week',
            //     'level' => 'intermediate',
            //     'image' => 'fswd.jpg',
            //     'rating' => 4.8,
            //     'review_count' => 2140,
            //     'parts' => [
            //         [
            //             'title' => 'HTML, CSS, and JS Basics',
            //             'description' => 'Learn front-end basics',
            //             'estimated_duration' => '5 hours',
            //             'items' => [
            //                 ['title' => 'HTML Intro', 'lesson_number' => 1, 'duration' => '45 minutes', 'content' => 'Learn HTML'],
            //                 ['title' => 'CSS Layouts', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Learn CSS']
            //             ]
            //         ],
            //         [
            //             'title' => 'Backend with Laravel',
            //             'description' => 'Laravel for backend',
            //             'estimated_duration' => '6 hours',
            //             'items' => [
            //                 ['title' => 'Routing & Controllers', 'lesson_number' => 1, 'duration' => '50 minutes', 'content' => 'Intro to Laravel'],
            //                 ['title' => 'Database & Eloquent', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Using Eloquent ORM']
            //             ]
            //         ]
            //     ]
            // ],
            // [
            //     'title' => 'Digital Marketing Essentials',
            //     'description' => 'Learn SEO, social media, and ads!',
            //     'instructor_id' => 3,
            //     'category_id' => $business->id,
            //     'length_value' => 6,
            //     'length_unit' => 'week',
            //     'level' => 'beginner',
            //     'image' => 'dme.png',
            //     'rating' => 4.5,
            //     'review_count' => 1190,
            //     'parts' => [
            //         [
            //             'title' => 'Introduction to Marketing',
            //             'description' => 'Core principles of marketing',
            //             'estimated_duration' => '2 hours',
            //             'items' => [
            //                 ['title' => 'What is Marketing?', 'lesson_number' => 1, 'duration' => '30 minutes', 'content' => 'Intro concepts'],
            //                 ['title' => 'Target Audiences', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Finding the right customer']
            //             ]
            //         ],
            //         [
            //             'title' => 'SEO & Content Strategy',
            //             'description' => 'SEO Basics',
            //             'estimated_duration' => '4 hours',
            //             'items' => [
            //                 ['title' => 'Keyword Research', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Find effective keywords'],
            //                 ['title' => 'Content Planning', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Build a content calendar']
            //             ]
            //         ]
            //     ]
            // ],
            // [
            //     'title' => 'Data Analysis with Python',
            //     'description' => 'Analyze data using Python tools',
            //     'instructor_id' => 1,
            //     'category_id' => $dataScience->id,
            //     'length_value' => 5,
            //     'length_unit' => 'week',
            //     'level' => 'intermediate',
            //     'image' => 'dawp.webp',
            //     'rating' => 4.6,
            //     'review_count' => 950,
            //     'parts' => [
            //         [
            //             'title' => 'Python for Data',
            //             'description' => 'Using Python libraries',
            //             'estimated_duration' => '3 hours',
            //             'items' => [
            //                 ['title' => 'Pandas Basics', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Intro to Pandas'],
            //                 ['title' => 'Data Cleaning', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Cleaning techniques']
            //             ]
            //         ],
            //         [
            //             'title' => 'Data Visualization',
            //             'description' => 'Visualize your data',
            //             'estimated_duration' => '2.5 hours',
            //             'items' => [
            //                 ['title' => 'Matplotlib & Seaborn', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Plotting graphs'],
            //                 ['title' => 'Dashboards', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Building visual dashboards']
            //             ]
            //         ]
            //     ]
            // ],
            // [
            //     'title' => 'Basic Graphic Design',
            //     'description' => 'Design like a pro with free tools',
            //     'instructor_id' => 2,
            //     'category_id' => $graphicDesign->id,
            //     'length_value' => 3,
            //     'length_unit' => 'week',
            //     'level' => 'beginner',
            //     'image' => 'graph2.jpg',
            //     'rating' => 4.3,
            //     'review_count' => 670,
            //     'parts' => [
            //         [
            //             'title' => 'Design Theory',
            //             'description' => 'Principles of good design',
            //             'estimated_duration' => '2 hours',
            //             'items' => [
            //                 ['title' => 'Color & Typography', 'lesson_number' => 1, 'duration' => '45 minutes', 'content' => 'Color theory basics'],
            //                 ['title' => 'Balance and Layout', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'How to layout elements']
            //             ]
            //         ],
            //         [
            //             'title' => 'Practical Tools',
            //             'description' => 'Design tools for beginners',
            //             'estimated_duration' => '3 hours',
            //             'items' => [
            //                 ['title' => 'Canva Basics', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'How to use Canva'],
            //                 ['title' => 'Free Resources', 'lesson_number' => 2, 'duration' => '30 minutes', 'content' => 'Best free tools online']
            //             ]
            //         ]
            //     ]
            // ],
        ];

        foreach ($courses as $courseData) {
            $course = Course::create([
                'title' => $courseData['title'],
                'description' => $courseData['description'],
                'instructor_id' => $courseData['instructor_id'],
                'category_id' => $courseData['category_id'],
                'length_value' => $courseData['length_value'],
                'length_unit' => $courseData['length_unit'],
                'level' => $courseData['level'],
                'image_path_1' => $courseData['image_path_1'],
                'image_path_2' => $courseData['image_path_2'],
                'image_path_3' => $courseData['image_path_3'],
                'rating' => $courseData['rating'],
                'review_count' => $courseData['review_count'],
            ]);

            foreach ($courseData['parts'] as $index => $partData) {
                $part = CoursePart::create([
                    'course_id' => $course->id,
                    'title' => $partData['title'],
                    'order' => $index + 1,
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
}