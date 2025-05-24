@extends('layouts.app')

@section('content')
<div class="title-container flex flex-col w-full max-w-screen-lg mx-auto px-5 lg:px-10 py-10">
    <!-- Title & Description -->
    <div class="lg:flex lg:items-start lg:gap-10 mb-10">
        <div class="title flex-1">
            <h1 class="font-roboto font-bold text-[2rem] md:text-[2.2rem] lg:text-[2.5rem] leading-tight">
                Online Courses on Design and Development
            </h1>
        </div>
        <div class="description font-roboto text-base lg:text-[1.1rem] flex-1 mt-4 lg:mt-0 text-gray-700">
            <p>Welcome to our online course page, where you can enhance your skills in design and development. Choose from our carefully curated selection of 10 courses designed to provide you with comprehensive knowledge and practical experience. Explore the courses below and find the perfect fit for your learning journey.</p>
        </div>
    </div>

    <!-- Loop Courses -->
    @foreach ($courses as $course)
    <div class="course-card-container mb-12 rounded-xl shadow-xl bg-white px-5 py-8">
        <!-- Course Header -->
        <div class="lg:flex justify-between items-start gap-10">
            <div class="flex-1">
                <h2 class="font-roboto font-bold text-[1.5rem] text-black">{{ $course->title }}</h2>
                <h3 class="font-roboto font-semibold text-[1.1rem] text-gray-600">4.8 Rating</h3>
                <p class="text-gray-700 text-[1rem] mt-2">{{ $course->description }}</p>
            </div>

            <!-- Button Actions -->
            <div class="mt-5 lg:mt-0 flex gap-4">
                <a href="{{ route('courses.show', $course->id) }}" class="font-roboto border border-gray-400 text-black text-[1rem] font-semibold px-6 py-3 rounded-lg">
                    View Course
                </a>
            <a href="#"     
                 class="bg-purple-600 hover:bg-purple-700 transition-all duration-200 text-white text-[1rem] font-semibold px-8 py-3 rounded-lg shadow-md">
            Enroll Now
            </a>
            </div>
        </div>

        <!-- Images -->
        <div class="image-container flex gap-5 mt-8">
            <div class="h-[6rem] w-[6rem] lg:h-[12rem] lg:w-[20rem]">
                <img src="{{ asset('storage/web1.jpg') }}" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="h-[6rem] w-[6rem] lg:h-[12rem] lg:w-[20rem]">
                <img src="{{ asset('storage/web2.jpeg') }}" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="h-[6rem] w-[6rem] lg:h-[12rem] lg:w-[20rem]">
                <img src="{{ asset('storage/web3.jpg') }}" class="w-full h-full object-cover rounded-lg">
            </div>
        </div>

        <!-- Duration & Level -->
        <div class="flex gap-3 mt-6">
            <span class="border border-gray-300 rounded-full py-1 px-4 text-sm font-medium text-gray-700">
                {{ $course->length_value . ' ' . ucfirst($course->length_unit) }}
            </span>
            <span class="border border-gray-300 rounded-full py-1 px-4 text-sm font-medium text-gray-700 capitalize">
                {{ $course->level }}
            </span>
        </div>

        <!-- Instructor -->
        <div class="mt-4 text-[1.1rem] font-bold text-black">
            By {{ $course->instructor->name ?? 'Unknown' }}
        </div>

        <!-- Curriculum -->
        <div class="mt-6 border border-gray-200 rounded-xl p-5">
            <h2 class="font-bold text-[1.1rem] mb-5">Curriculum</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                @foreach ($course->parts as $part)
                    <div class="text-center">
                        <div class="text-[1.8rem] font-extrabold text-primary-purple leading-none">
                            {{ str_pad($part->order, 2, '0', STR_PAD_LEFT) }}
                        </div>
                        <p class="text-black font-medium text-sm mt-1">{{ $part->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
