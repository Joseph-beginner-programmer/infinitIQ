<?php

namespace Database\Seeders;

<<<<<<< HEAD
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
        $mechanicalEngineering = Category::firstOrCreate(['name' => 'Mechanical Engineerint'], ['slug' => 'mechanical-engineering']);

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
            [
                'title' => 'Full Stack Web Development',
                'description' => 'Master both front-end and back-end development!',
                'instructor_id' => 2,
                'category_id' => $programming->id,
                'length_value' => 8,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/web-dev-1.jpg',
                'image_path_2' => 'images/web-dev-2.jpg',
                'image_path_3' => 'images/web-dev-3.jpg',
                'rating' => 4.8,
                'review_count' => 2140,
                'parts' => [
                    [
                        'title' => 'HTML, CSS, and JS Basics',
                        'description' => 'Learn front-end basics',
                        'estimated_duration' => '5 hours',
                        'items' => [
                            ['title' => 'HTML Intro', 'lesson_number' => 1, 'duration' => '45 minutes', 'content' => 'Learn HTML'],
                            ['title' => 'CSS Layouts', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Learn CSS']
                        ]
                    ],
                    [
                        'title' => 'Backend with Laravel',
                        'description' => 'Laravel for backend',
                        'estimated_duration' => '6 hours',
                        'items' => [
                            ['title' => 'Routing & Controllers', 'lesson_number' => 1, 'duration' => '50 minutes', 'content' => 'Intro to Laravel'],
                            ['title' => 'Database & Eloquent', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Using Eloquent ORM']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Digital Marketing Essentials',
                'description' => 'Learn SEO, social media, and ads!',
                'instructor_id' => 3,
                'category_id' => $business->id,
                'length_value' => 6,
                'length_unit' => 'week',
                'level' => 'beginner',
                'image_path_1' => 'images/digital-marketing-1.jpg',
                'image_path_2' => 'images/digital-marketing-2.jpg',
                'image_path_3' => 'images/digital-marketing-3.jpg',
                'rating' => 4.5,
                'review_count' => 1190,
                'parts' => [
                    [
                        'title' => 'Introduction to Marketing',
                        'description' => 'Core principles of marketing',
                        'estimated_duration' => '2 hours',
                        'items' => [
                            ['title' => 'What is Marketing?', 'lesson_number' => 1, 'duration' => '30 minutes', 'content' => 'Intro concepts'],
                            ['title' => 'Target Audiences', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Finding the right customer']
                        ]
                    ],
                    [
                        'title' => 'SEO & Content Strategy',
                        'description' => 'SEO Basics',
                        'estimated_duration' => '4 hours',
                        'items' => [
                            ['title' => 'Keyword Research', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Find effective keywords'],
                            ['title' => 'Content Planning', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Build a content calendar']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Data Analysis with Python',
                'description' => 'Analyze data using Python tools',
                'instructor_id' => 1,
                'category_id' => $dataScience->id,
                'length_value' => 5,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/data-science-1.webp',
                'image_path_2' => 'images/data-science-2.webp',
                'image_path_3' => 'images/data-science-3.webp',
                'rating' => 4.6,
                'review_count' => 950,
                'parts' => [
                    [
                        'title' => 'Python for Data',
                        'description' => 'Using Python libraries',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'Pandas Basics', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Intro to Pandas'],
                            ['title' => 'Data Cleaning', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Cleaning techniques']
                        ]
                    ],
                    [
                        'title' => 'Data Visualization',
                        'description' => 'Visualize your data',
                        'estimated_duration' => '2.5 hours',
                        'items' => [
                            ['title' => 'Matplotlib & Seaborn', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Plotting graphs'],
                            ['title' => 'Dashboards', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Building visual dashboards']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Introduction to mechanical engineering',
                'description' => 'Get to immerse yourself in the world of mechanical engineering',
                'instructor_id' => 2,
                'category_id' => $mechanicalEngineering->id,
                'length_value' => 3,
                'length_unit' => 'week',
                'level' => 'beginner',
                'image_path_1' => 'images/mechanical-engineering-1.jpg',
                'image_path_2' => 'images/mechanical-engineering-2.jpg',
                'image_path_3' => 'images/mechanical-engineering-3.jpg',
                'rating' => 4.3,
                'review_count' => 670,
                'parts' => [
                    [
                        'title' => 'Mechanical Design',
                        'description' => 'Principles of good design',
                        'estimated_duration' => '2 hours',
                        'items' => [
                            ['title' => 'Basic engineering drawing', 'lesson_number' => 1, 'duration' => '45 minutes', 'content' => 'How to draw a techincal drawing'],
                            ['title' => 'Material Selection', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'How to choose the right element']
                        ]
                    ],
                    [
                        'title' => 'Statics',
                        'description' => 'combine physics with real world mechanical application',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'Physics review', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'High school level physics'],
                            ['title' => 'Weight and Vector', 'lesson_number' => 2, 'duration' => '30 minutes', 'content' => 'How to calculate vector']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Designing with Figma',
                'description' => 'Learn how to use Figma to create useful wireframe and mockup of design',
                'instructor_id' => 6,
                'category_id' => $design->id,
                'length_value' => 4,
                'length_unit' => 'week',
                'level' => 'beginner',
                'image_path_1' => 'images/figma-1.jpg',
                'image_path_2' => 'images/figma-2.jpg',
                'image_path_3' => 'images/figma-3.png',
                'rating' => 4.9,
                'review_count' => 823,
                'parts' => [
                    [
                        'title' => 'The UI of Figma',
                        'description' => 'Overview of Figma UI',
                        'estimated_duration' => '2 hours',
                        'items' => [
                            ['title' => 'Exploring the UI', 'lesson_number' => 1, 'duration' => '30 minutes', 'content' => 'Trying out every UI elements in Figma'],
                            ['title' => 'Using the UI', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'After understanding the UI, time to use it']
                        ]
                    ],
                    [
                        'title' => 'Basic Project',
                        'description' => 'Learn how to create an actual figma project',
                        'estimated_duration' => '5 hours',
                        'items' => [
                            ['title' => 'Planning the design', 'lesson_number' => 1, 'duration' => '45 minutes', 'content' => 'How to be creative'],
                            ['title' => 'Working on the desing', 'lesson_number' => 2, 'duration' => '70 minutes', 'content' => 'Turning idea into reality']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Exploring the Sea with C',
                'description' => 'Learn how to code simple to complex application using the C programming language',
                'instructor_id' => 5,
                'category_id' => $programming->id,
                'length_value' => 10,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/C-program-1.jpg',
                'image_path_2' => 'images/C-program-2.jpg',
                'image_path_3' => 'images/C-program-3.jpg',
                'rating' => 4.0,
                'review_count' => 1120,
                'parts' => [
                    [
                        'title' => 'C Basic Syntax',
                        'description' => 'Learn the building block of',
                        'estimated_duration' => '8 hours',
                        'items' => [
                            ['title' => 'HTML Intro', 'lesson_number' => 1, 'duration' => '45 minutes', 'content' => 'Learn HTML'],
                            ['title' => 'CSS Layouts', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Learn CSS']
                        ]
                    ],
                    [
                        'title' => 'Backend with C',
                        'description' => 'C for backend',
                        'estimated_duration' => '6 hours',
                        'items' => [
                            ['title' => 'Routing & Controllers', 'lesson_number' => 1, 'duration' => '50 minutes', 'content' => 'Intro to Laravel'],
                            ['title' => 'Database', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Using C related database']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Basic Accounting with Joseph',
                'description' => 'Learn SEO, social media, and ads!',
                'instructor_id' => 4,
                'category_id' => $business->id,
                'length_value' => 2,
                'length_unit' => 'month',
                'level' => 'intermediate',
                'image_path_1' => 'images/accounting-1.jpg',
                'image_path_2' => 'images/accounting-2.jpg',
                'image_path_3' => 'images/accounting-3.jpg',
                'rating' => 3.6,
                'review_count' => 1817,
                'parts' => [
                    [
                        'title' => 'Introduction to Accounting',
                        'description' => 'Core principles of accounting',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'What is Accounting?', 'lesson_number' => 1, 'duration' => '35 minutes', 'content' => 'Intro concepts'],
                            ['title' => 'General Ledger', 'lesson_number' => 2, 'duration' => '40 minutes', 'content' => 'Understanding general ledger']
                        ]
                    ],
                    [
                        'title' => 'Advanced Ledger',
                        'description' => 'learn advance level of ledger in accounting',
                        'estimated_duration' => '5 hours',
                        'items' => [
                            ['title' => 'end of year ledger', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'why and how of end of year ledger'],
                            ['title' => 'Closing Ledger', 'lesson_number' => 2, 'duration' => '50 minutes', 'content' => 'Create a closing ledger']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Data Mining Fundamentals',
                'description' => 'Analyze data using Python tools',
                'instructor_id' => 1,
                'category_id' => $dataScience->id,
                'length_value' => 7,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/data-mining-1.avif',
                'image_path_2' => 'images/data-mining-2.avif',
                'image_path_3' => 'images/data-mining-3.avif',
                'rating' => 4.8,
                'review_count' => 901,
                'parts' => [
                    [
                        'title' => 'Data Cleaning',
                        'description' => 'Using Python libraries',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'Data cleaning basic method', 'lesson_number' => 1, 'duration' => '50 minutes', 'content' => 'Intro to basic method for data cleaning'],
                            ['title' => 'Data cleaning advanced method', 'lesson_number' => 2, 'duration' => '55 minutes', 'content' => 'Cleaning the data perfectly']
                        ]
                    ],
                    [
                        'title' => 'Data Anaylsis',
                        'description' => 'After cleaning data we can start doing some analysis',
                        'estimated_duration' => '3.5 hours',
                        'items' => [
                            ['title' => 'Basic method for data analysis', 'lesson_number' => 1, 'duration' => '80 minutes', 'content' => 'Excel method'],
                            ['title' => 'advanced method for data analysis', 'lesson_number' => 2, 'duration' => '50 minutes', 'content' => 'Building data analysis model']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Fundamentals of Material Science for Mechanical Engineers',
                'description' => 'Explore the essential principles of materials and their applications in mechanical engineering.',
                'instructor_id' => 3,
                'category_id' => $mechanicalEngineering->id,
                'length_value' => 4,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/material-science-1.jpg',
                'image_path_2' => 'images/material-science-2.jpg',
                'image_path_3' => 'images/material-science-3.jpg',
                'rating' => 4.6,
                'review_count' => 820,
                'parts' => [
                    [
                        'title' => 'Structure of Materials',
                        'description' => 'Understand atomic structure and how it affects material behavior.',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            [
                                'title' => 'Atomic Bonding and Structure',
                                'lesson_number' => 1,
                                'duration' => '60 minutes',
                                'content' => 'Learn about different types of atomic bonding in materials.'
                            ],
                            [
                                'title' => 'Crystal Structures',
                                'lesson_number' => 2,
                                'duration' => '45 minutes',
                                'content' => 'Explore the arrangement of atoms in crystalline materials.'
                            ]
                        ]
                    ],
                    [
                        'title' => 'Mechanical Properties of Materials',
                        'description' => 'Examine how materials respond to mechanical forces.',
                        'estimated_duration' => '3.5 hours',
                        'items' => [
                            [
                                'title' => 'Stress-Strain Behavior',
                                'lesson_number' => 1,
                                'duration' => '75 minutes',
                                'content' => 'Understand elastic and plastic deformation in metals.'
                            ],
                            [
                                'title' => 'Hardness and Toughness',
                                'lesson_number' => 2,
                                'duration' => '45 minutes',
                                'content' => 'How to test and interpret mechanical resistance.'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Practical UI/UX Design Techniques',
                'description' => 'Enhance your design skills with real-world UI/UX techniques and tools.',
                'instructor_id' => 6,
                'category_id' => $design->id,
                'length_value' => 5,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/uiux-techniques-1.jpg',
                'image_path_2' => 'images/uiux-techniques-2.jpg',
                'image_path_3' => 'images/uiux-techniques-3.jpg',
                'rating' => 4.8,
                'review_count' => 1340,
                'parts' => [
                    [
                        'title' => 'Design Principles & Aesthetics',
                        'description' => 'Learn the visual foundations of effective UI design.',
                        'estimated_duration' => '2.5 hours',
                        'items' => [
                            [
                                'title' => 'Color Theory in UI',
                                'lesson_number' => 1,
                                'duration' => '45 minutes',
                                'content' => 'How to use color effectively for usability and branding.'
                            ],
                            [
                                'title' => 'Typography & Spacing',
                                'lesson_number' => 2,
                                'duration' => '60 minutes',
                                'content' => 'Using fonts and white space for clarity and appeal.'
                            ]
                        ]
                    ],
                    [
                        'title' => 'Wireframing and Prototyping',
                        'description' => 'Build interactive wireframes and test your designs.',
                        'estimated_duration' => '3.5 hours',
                        'items' => [
                            [
                                'title' => 'Low-fidelity Wireframes',
                                'lesson_number' => 1,
                                'duration' => '50 minutes',
                                'content' => 'Sketching and structuring user interfaces.'
                            ],
                            [
                                'title' => 'Prototyping with Figma',
                                'lesson_number' => 2,
                                'duration' => '70 minutes',
                                'content' => 'Creating interactive flows using Figma.'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Modern Full Stack Development with MERN',
                'description' => 'Build powerful web apps using MongoDB, Express, React, and Node.js.',
                'instructor_id' => 4,
                'category_id' => $programming->id,
                'length_value' => 10,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/mern-stack-1.webp',
                'image_path_2' => 'images/mern-stack-2.webp',
                'image_path_3' => 'images/mern-stack-3.webp',
                'rating' => 4.9,
                'review_count' => 1980,
                'parts' => [
                    [
                        'title' => 'React for Front-End',
                        'description' => 'Create dynamic user interfaces using React.',
                        'estimated_duration' => '6 hours',
                        'items' => [
                            [
                                'title' => 'React Basics',
                                'lesson_number' => 1,
                                'duration' => '60 minutes',
                                'content' => 'Learn components, props, and JSX.'
                            ],
                            [
                                'title' => 'State & Hooks',
                                'lesson_number' => 2,
                                'duration' => '75 minutes',
                                'content' => 'Manage state and lifecycle with hooks.'
                            ]
                        ]
                    ],
                    [
                        'title' => 'Node.js & Express API',
                        'description' => 'Build RESTful APIs with Node and Express.',
                        'estimated_duration' => '5.5 hours',
                        'items' => [
                            [
                                'title' => 'Setting Up Express Server',
                                'lesson_number' => 1,
                                'duration' => '50 minutes',
                                'content' => 'Create your first Express app.'
                            ],
                            [
                                'title' => 'CRUD Operations',
                                'lesson_number' => 2,
                                'duration' => '70 minutes',
                                'content' => 'Implement Create, Read, Update, Delete in REST APIs.'
                            ]
                        ]
                    ],
                    [
                        'title' => 'MongoDB Integration',
                        'description' => 'Store and query data using MongoDB.',
                        'estimated_duration' => '4 hours',
                        'items' => [
                            [
                                'title' => 'MongoDB Basics',
                                'lesson_number' => 1,
                                'duration' => '60 minutes',
                                'content' => 'Collections, documents, and queries.'
                            ],
                            [
                                'title' => 'Mongoose ODM',
                                'lesson_number' => 2,
                                'duration' => '60 minutes',
                                'content' => 'Model your data with Mongoose.'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Entrepreneurship Masterclass',
                'description' => 'Build your startup from scratch and learn how to scale!',
                'instructor_id' => 5,
                'category_id' => $business->id,
                'length_value' => 8,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/entrepreneurship-1.jpg',
                'image_path_2' => 'images/entrepreneurship-2.jpg',
                'image_path_3' => 'images/entrepreneurship-3.jpg',
                'rating' => 4.7,
                'review_count' => 865,
                'parts' => [
                    [
                        'title' => 'Startup Fundamentals',
                        'description' => 'Understand what it takes to launch a business',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'Business Models', 'lesson_number' => 1, 'duration' => '45 minutes', 'content' => 'Explore different business models'],
                            ['title' => 'Idea Validation', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Learn how to validate your idea']
                        ]
                    ],
                    [
                        'title' => 'Fundraising & Growth',
                        'description' => 'Raise capital and expand operations',
                        'estimated_duration' => '5 hours',
                        'items' => [
                            ['title' => 'Pitching to Investors', 'lesson_number' => 1, 'duration' => '90 minutes', 'content' => 'Craft a compelling pitch deck'],
                            ['title' => 'Scaling Strategies', 'lesson_number' => 2, 'duration' => '120 minutes', 'content' => 'Techniques for sustainable growth']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Machine Learning Foundations',
                'description' => 'Master the basics of machine learning with real-world applications.',
                'instructor_id' => 4,
                'category_id' => $dataScience->id,
                'length_value' => 7,
                'length_unit' => 'week',
                'level' => 'advanced',
                'image_path_1' => 'images/ml-foundations-1.webp',
                'image_path_2' => 'images/ml-foundations-2.webp',
                'image_path_3' => 'images/ml-foundations-3.webp',
                'rating' => 4.8,
                'review_count' => 1320,
                'parts' => [
                    [
                        'title' => 'Supervised Learning',
                        'description' => 'Learn about labeled data and predictive models',
                        'estimated_duration' => '4 hours',
                        'items' => [
                            ['title' => 'Linear Regression', 'lesson_number' => 1, 'duration' => '90 minutes', 'content' => 'Understand and apply linear regression'],
                            ['title' => 'Classification Models', 'lesson_number' => 2, 'duration' => '75 minutes', 'content' => 'Decision trees, KNN, and more']
                        ]
                    ],
                    [
                        'title' => 'Model Evaluation & Tuning',
                        'description' => 'Ensure your model performs well',
                        'estimated_duration' => '3.5 hours',
                        'items' => [
                            ['title' => 'Cross-Validation', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Reduce overfitting with k-fold CV'],
                            ['title' => 'Hyperparameter Tuning', 'lesson_number' => 2, 'duration' => '90 minutes', 'content' => 'Use Grid Search and Random Search']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Thermodynamics and Heat Transfer',
                'description' => 'Understand energy systems and thermal processes essential to mechanical engineering.',
                'instructor_id' => 6,
                'category_id' => $mechanicalEngineering->id,
                'length_value' => 4,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/thermodynamics-1.jpg',
                'image_path_2' => 'images/thermodynamics-2.jpg',
                'image_path_3' => 'images/thermodynamics-3.jpg',
                'rating' => 4.5,
                'review_count' => 540,
                'parts' => [
                    [
                        'title' => 'Thermodynamic Principles',
                        'description' => 'Explore the laws of thermodynamics and their real-world applications.',
                        'estimated_duration' => '3.5 hours',
                        'items' => [
                            ['title' => 'First Law of Thermodynamics', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Energy conservation in systems'],
                            ['title' => 'Second Law & Entropy', 'lesson_number' => 2, 'duration' => '75 minutes', 'content' => 'Understanding heat direction and efficiency']
                        ]
                    ],
                    [
                        'title' => 'Heat Transfer Methods',
                        'description' => 'Learn how heat moves through materials and systems.',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'Conduction & Convection', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Heat flow in solids and fluids'],
                            ['title' => 'Radiation & Heat Exchangers', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Thermal radiation and energy transfer devices']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Advanced UI Patterns & Prototyping',
                'description' => 'Master complex UI structures and bring your ideas to life with prototyping tools.',
                'instructor_id' => 4,
                'category_id' => $design->id,
                'length_value' => 6,
                'length_unit' => 'week',
                'level' => 'advanced',
                'image_path_1' => 'images/ui-prototyping-1.jpg',
                'image_path_2' => 'images/ui-prototyping-2.jpg',
                'image_path_3' => 'images/ui-prototyping-3.jpg',
                'rating' => 4.8,
                'review_count' => 875,
                'parts' => [
                    [
                        'title' => 'UI Design Patterns',
                        'description' => 'Learn reusable solutions for common interface problems.',
                        'estimated_duration' => '4 hours',
                        'items' => [
                            ['title' => 'Navigation Models', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Tabs, drawers, and bottom navs'],
                            ['title' => 'Interaction Feedback', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Microinteractions and states']
                        ]
                    ],
                    [
                        'title' => 'Prototyping Tools & Testing',
                        'description' => 'Turn wireframes into interactive prototypes and test usability.',
                        'estimated_duration' => '4.5 hours',
                        'items' => [
                            ['title' => 'Prototyping with Figma', 'lesson_number' => 1, 'duration' => '90 minutes', 'content' => 'Linking frames and animations'],
                            ['title' => 'Usability Testing', 'lesson_number' => 2, 'duration' => '75 minutes', 'content' => 'Conduct and analyze tests effectively']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Mobile App Development with Flutter',
                'description' => 'Build beautiful, natively compiled apps for mobile from a single codebase using Flutter.',
                'instructor_id' => 4,
                'category_id' => $programming->id,
                'length_value' => 7,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/flutter-1.jpg',
                'image_path_2' => 'images/flutter-2.jpg',
                'image_path_3' => 'images/flutter-3.jpg',
                'rating' => 4.7,
                'review_count' => 1785,
                'parts' => [
                    [
                        'title' => 'Dart and Flutter Basics',
                        'description' => 'Get started with Dart programming language and Flutter fundamentals.',
                        'estimated_duration' => '6 hours',
                        'items' => [
                            ['title' => 'Introduction to Dart', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'Learn Dart syntax and concepts.'],
                            ['title' => 'Flutter Widgets', 'lesson_number' => 2, 'duration' => '90 minutes', 'content' => 'Building UI with Flutter widgets.']
                        ]
                    ],
                    [
                        'title' => 'Building and Deploying Apps',
                        'description' => 'Learn app state management and deployment processes.',
                        'estimated_duration' => '7 hours',
                        'items' => [
                            ['title' => 'State Management', 'lesson_number' => 1, 'duration' => '80 minutes', 'content' => 'Provider, setState, and Bloc patterns.'],
                            ['title' => 'Publishing Apps', 'lesson_number' => 2, 'duration' => '70 minutes', 'content' => 'Deploying to App Store and Google Play.']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Project Management Fundamentals',
                'description' => 'Master the basics of planning, executing, and closing projects successfully.',
                'instructor_id' => 2,
                'category_id' => $business->id,
                'length_value' => 6,
                'length_unit' => 'week',
                'level' => 'beginner',
                'image_path_1' => 'images/project-management-1.jpg',
                'image_path_2' => 'images/project-management-2.jpg',
                'image_path_3' => 'images/project-management-3.jpg',
                'rating' => 4.7,
                'review_count' => 1120,
                'parts' => [
                    [
                        'title' => 'Project Planning',
                        'description' => 'Learn how to scope and schedule projects effectively.',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'Defining Project Scope', 'lesson_number' => 1, 'duration' => '50 minutes', 'content' => 'Setting clear objectives and deliverables.'],
                            ['title' => 'Scheduling & Milestones', 'lesson_number' => 2, 'duration' => '70 minutes', 'content' => 'Creating timelines and tracking progress.']
                        ]
                    ],
                    [
                        'title' => 'Execution and Monitoring',
                        'description' => 'Keep your project on track with proper management techniques.',
                        'estimated_duration' => '4 hours',
                        'items' => [
                            ['title' => 'Resource Management', 'lesson_number' => 1, 'duration' => '65 minutes', 'content' => 'Assigning and managing team resources.'],
                            ['title' => 'Risk Management', 'lesson_number' => 2, 'duration' => '75 minutes', 'content' => 'Identifying and mitigating project risks.']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Big Data Fundamentals',
                'description' => 'Learn the concepts and tools to handle and analyze big data effectively.',
                'instructor_id' => 6,
                'category_id' => $dataScience->id,
                'length_value' => 5,
                'length_unit' => 'week',
                'level' => 'intermediate',
                'image_path_1' => 'images/big-data-1.webp',
                'image_path_2' => 'images/big-data-2.webp',
                'image_path_3' => 'images/big-data-3.webp',
                'rating' => 4.5,
                'review_count' => 870,
                'parts' => [
                    [
                        'title' => 'Introduction to Big Data',
                        'description' => 'Understanding big data challenges and architectures.',
                        'estimated_duration' => '3 hours',
                        'items' => [
                            ['title' => 'Big Data Concepts', 'lesson_number' => 1, 'duration' => '60 minutes', 'content' => 'What is Big Data and why it matters'],
                            ['title' => 'Hadoop Ecosystem', 'lesson_number' => 2, 'duration' => '45 minutes', 'content' => 'Introduction to Hadoop components']
                        ]
                    ],
                    [
                        'title' => 'Data Processing & Tools',
                        'description' => 'Working with big data tools and frameworks.',
                        'estimated_duration' => '3.5 hours',
                        'items' => [
                            ['title' => 'Spark Basics', 'lesson_number' => 1, 'duration' => '90 minutes', 'content' => 'Distributed processing with Apache Spark'],
                            ['title' => 'NoSQL Databases', 'lesson_number' => 2, 'duration' => '60 minutes', 'content' => 'Introduction to Cassandra and MongoDB']
                        ]
                    ]
                ]
            ],
            [
                'title' => 'Automotive Engineering Basics',
                'description' => 'Explore the fundamentals of automotive design, engines, and vehicle systems.',
                'instructor_id' => 5,
                'category_id' => $mechanicalEngineering->id,
                'length_value' => 6,
                'length_unit' => 'week',
                'level' => 'beginner',
                'image_path_1' => 'images/automotive-1.jpg',
                'image_path_2' => 'images/automotive-2.jpg',
                'image_path_3' => 'images/automotive-3.jpg',
                'rating' => 4.6,
                'review_count' => 740,
                'parts' => [
                    [
                        'title' => 'Vehicle Dynamics and Design',
                        'description' => 'Learn how vehicles are designed and how they move.',
                        'estimated_duration' => '4 hours',
                        'items' => [
                            ['title' => 'Introduction to Vehicle Dynamics', 'lesson_number' => 1, 'duration' => '90 minutes', 'content' => 'Basics of vehicle motion and stability'],
                            ['title' => 'Chassis and Suspension Systems', 'lesson_number' => 2, 'duration' => '90 minutes', 'content' => 'Components and functions of chassis and suspension']
                        ]
                    ],
                    [
                        'title' => 'Engine Fundamentals',
                        'description' => 'Understand how engines work and their components.',
                        'estimated_duration' => '5 hours',
                        'items' => [
                            ['title' => 'Internal Combustion Engines', 'lesson_number' => 1, 'duration' => '120 minutes', 'content' => 'Principles and cycles of IC engines'],
                            ['title' => 'Electric and Hybrid Vehicles', 'lesson_number' => 2, 'duration' => '90 minutes', 'content' => 'Emerging automotive technologies']
                        ]
                    ]
                ]
            ]


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
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_list = [
            ["Design Web with Thompson", "Learn how to design a good website with and figma and Thompson. He is a good teacher but very bad lookin", 1, 2, 1, "month", "intermediate"],
            ["RPL with Marcel", "Learn the fundamentals of software engineering project design and planning", 2, 3, 3, "week", "advanced"]
        ];

        for ($i = 0; $i < 2; $i++) {
            $course = $course_list[$i];
            DB::table('courses')->insert([
                "title" => $course[0],
                "description" => $course[1],
                "instructor_id" => $course[2],
                "category_id" => $course[3],
                "length_value" => $course[4],
                "length_unit" => $course[5],
                "level" => $course[6],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),                
            ]);
        }


>>>>>>> 5a19f689af9fdf875c72d43b77fc209b469bea40
    }
}
