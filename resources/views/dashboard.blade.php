@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold mb-6">Welcome back, {{ auth()->user()->name }} 👋</h1>

    <!-- Course In Progress -->
    <div class="mb-10">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Courses In Progress</h2>
            <a href="#" class="text-sm text-purple-600 hover:underline">View All</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($courses as $course)
            <div class="bg-white shadow rounded-lg overflow-hidden">
        <img src="{{ asset('images/' . $course->image) }}" alt="{{ $course->title }}" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-md font-bold mb-1">{{ $course->title }}</h3>
                    <p class="text-sm text-gray-500 mb-2">By {{ $course->instructor->name ?? 'Unknown' }}</p>
                    <p class="text-sm text-gray-600 mb-2">{{ Str::limit($course->description, 80) }}</p>

                    <div class="mt-2">
                        <div class="bg-purple-100 rounded-full h-2 w-full overflow-hidden">
                            <div class="bg-purple-600 h-full w-[55%]"></div>
                        </div>
                        <p class="text-xs text-purple-600 mt-1">55% Complete</p>
                    </div>
                </div>
            </div>
            @empty
            <p>You haven't enrolled in any courses yet.</p>
            @endforelse
        </div>
    </div>

    <!-- Popular Categories (Placeholder) -->

</div>
@endsection
