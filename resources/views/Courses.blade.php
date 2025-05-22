@extends('layouts.app')

@section('content')
<div class="title-container flex flex-col w-full max-w-screen-sm lg:max-w-none mx-auto lg:px-10">
    <div class="lg:flex lg:items-center">
        <div class="title flex-1">
            <h1 class="font-roboto font-bold text-[2rem] md:text-[2.2rem] lg:text-[2.5rem]">
                Online Course on Design and Development
            </h1>

        </div>

        <div class="description font-roboto lg:text-[1.1rem] flex-basis-2 mt-3 flex-1">
            <p>Welcome to our online course page, where you can enhance your skills in design and development. Choose from our carefully curated selection of 10 courses designed to provide you with comprehensive knowledge and practical experience. Explore the courses below and find the perfect fit for your learning journey.</p>
        </div>
    </div>
    @foreach ($courses as $course)
    <!-- course card container -->
    <div class="course-card-container mt-5 rounded-lg shadow-xl bg-white lg:px-5 lg:py-12">
        <!-- course header -->
        <div class="course-card lg:flex w-full h-[15rem] mt-5 lg:mt-0 gap-5 justify-between items-start px-5  lg:max-h-[8rem]">
            <div class="lg:flex flex-col md:flex-1 flex-3">
                <h2 class="font-roboto font-bold text-[1.3rem] lg:text-[1.5rem] text-black">{{$course->title}}</h2>
                <h3 class="font-roboto font-bold text-[1.1rem] lg:text-[1.3rem]">4.8 Rating</h3>
                <p class="text-[1rem] lg:text-[1.1rem] lg:max-w-[50rem]">
                    {{ $course->description }}
                </p>
            </div>
            <!-- Button Container -->
            <div class=" mt-5 flex gap-5 justify-end items-start">
                <!-- view course button -->
                <a href="{{ route('courses.show', $course->id) }}" class="font-roboto border-2 border-grey-400 flex-none
                    text-black text-[1.1rem] font-bold px-6 py-3 rounded-lg">
                    View Course
                </a>
                <!-- enroll course button -->
                <a href="_#" class="bg-primary-purple font-roboto flex-none
                    text-white text-[1.1rem] font-bold px-8 py-3 rounded-lg border-primary-purple border-2">
                    Enroll Now
                </a>
            </div>
        </div>
        <!-- course image -->
        <div class="course-image py-2 px-5 lg:mt-0 mt-5 ">
            <!-- image container -->
            <div class="image-container flex gap-5">
                <!-- first image -->
                <div class="first-image h-[6rem] w-[6rem] lg:h-[20rem] lg:w-[25rem] ">
                    <img src="{{ asset("storage/web1.jpg") }}" class="w-full h-full object-cover rounded-lg">
                </div>
                <!-- second image -->
                <div class="first-image h-[6rem] w-[6rem] lg:h-[20rem] lg:w-[25rem]  ">
                    <img src="{{ asset("storage/web2.jpeg") }}" class="w-full h-full object-cover rounded-lg">
                </div>
                <!-- third image -->
                <div class="first-image h-[6rem] w-[6rem] lg:h-[20rem] lg:w-[25rem]  ">
                    <img src="{{ asset("storage/web3.jpg") }}" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
            <!-- course length and level -->
            <div class="flex gap-3 mt-8">
                <div class="border-2 border-grey-400 rounded-lg py-1 px-5 flex justify-center">
                    <p class="font-roboto text-black text-[1.05rem]">{{$course->length_value . ' ' . $course->length_unit}}</p>
                </div>
                <div class="border-2 border-grey-400 rounded-lg py-1 px-5 flex justify-center">
                    <p class="font-roboto text-[1.05rem text-black">{{ $course->level }}</p>
                </div>
            </div>
            <!-- instructor text -->
            <div class="mt-3">
                <p class="font-roboto text-[1.2rem] text-black font-bold">
                    By {{ $course->instructor->instructor_name }}
                </p>
            </div>
        </div>

        <!-- curicculum container -->
        <div class="py-2 px-5 h-auto">
            <div class="border-2 border-grey-400 rounded-lg pb-5">
                <h2 class="my-4 text-black mx-5 font-bold font-roboto text-[1.1rem]">Curriculum</h2>
                <hr class="h-[0.1rem] bg-gray-200 mb-5">

                @foreach ($course->parts as $part)
                <h1 class="mx-5 mt-5  font-bold font-roboto text-black text-[2.5rem] text-bold">{{ '0'.$part->order  }}</h1>
                <p class="mx-5 font-roboto text-[1.1rem] text-black font-medium">{{ $part->title }}</p>

                <hr class="h-[0.1rem] bg-gray-200 mb-5 mx-5">
                @endforeach




            </div>


        </div>   


    </div>
    @endforeach


</div>
@endsection
