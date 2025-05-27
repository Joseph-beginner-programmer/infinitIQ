@extends('layouts.app')

@section('content')

<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;700&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Be Vietnam Pro', sans-serif;
  }
</style>

<div class="w-full px-6 py-4">
  <div class="max-w-screen-xl mx-auto lg:flex lg:items-center lg:min-h-[300px]">
    <div class="flex-1 flex items-center">
      <h1 class="font-semibold text-[2rem] md:text-[2.5rem] lg:text-[2.3rem] leading-tight">
        {{ $course->title }}
      </h1>
    </div>

    <div class="flex-1 text-left space-y-4 text-base lg:text-[1rem]">
      <p class="leading-relaxed">
        {{ $course->description }}
      </p>
      <a href="#"
         class="inline-block bg-[#8A60A2] text-white font-bold text-base px-6 py-2 rounded-md hover:bg-opacity-90 transition">
         Enroll Now
      </a>
    </div>
  </div>

  <div class="mt-6">
        <img
          src="{{ asset('storage/' . $course->image_path_1) }}"
          alt="Course visual"
          class="rounded-lg w-full object-cover"
        />
    </div>

  <div class="max-w-screen-xl mx-auto mt-10 space-y-10">




    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($course->parts as $i => $lesson)
        <div class="bg-white p-6 rounded-xl shadow-md">
            <!-- Nomor urutan -->
            <div class="text-4xl font-bold text-gray-800 mb-2 text-right">
                {{ sprintf('%02d', $lesson->order ?? $i + 1) }}
            </div>

            <!-- Judul lesson sebagai judul box -->
            <h3 class="text-xl font-semibold text-gray-900 mb-4">
                {{ $lesson->title }}
            </h3>

            <!-- List item dan durasinya -->
            @foreach ($lesson->items as $item)
            <div class="flex items-center justify-between border border-gray-200 rounded-lg px-4 py-3 mb-2">
                <p class="text-sm text-gray-500">{{ $item->title }}</p>
                <div class="flex items-center text-sm text-gray-700 font-semibold bg-gray-100 px-3 py-1 rounded-md">
                    <svg class="w-4 h-4 mr-1 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ $item->duration ?? '-' }}
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
