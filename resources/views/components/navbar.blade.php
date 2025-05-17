<nav class="w-full bg-white shadow px-6 py-3 flex justify-between items-center">
    <!-- Left: Logo + Nav Links -->
    <div class="flex items-center space-x-8">
        <!-- Logo -->
        <img src="{{ asset('images/InfiniteIQ.png') }}" alt="Logo" class="w-10 h-10">

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('home') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100 {{ request()->is('/') ? 'bg-gray-100' : '' }}">Home</a>
            <a href="{{ route('courses') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700">Courses</a>
            <a href="{{ route('about') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700">About Us</a>
            <a href="{{ route('pricing') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700">Pricing</a>
            <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700">Contact</a>
        </div>
    </div>

    <!-- Center: Search Bar -->
    <div class="hidden lg:flex items-center bg-purple-200 rounded-full px-4 py-2 space-x-2">
        <button>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <input type="text" placeholder="Search Course" class="bg-transparent outline-none text-sm w-36">
        <button>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"></path>
            </svg>
        </button>
    </div>

    <!-- Right: Auth Buttons -->
    <div class="flex items-center space-x-4 ml-6">
        <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:text-purple-700">Sign Up</a>
        <a href="{{ route('login') }}" class="bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700 text-sm">Login</a>
    </div>
</nav>
