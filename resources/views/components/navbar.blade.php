<nav x-data="{ mobileMenuIsOpen: false }" x-on:click.away="mobileMenuIsOpen = false"
     class="fixed top-0 left-0 w-full z-50 bg-white shadow-sm flex items-center justify-between px-4 py-3 md:px-6 md:py-4"
     aria-label="main menu">
  <!-- Left: Logo + Nav Links + Search -->
  <div class="flex items-center space-x-6">
    <!-- Logo -->
    <img src="{{ asset('images/InfiniteIQ.webp') }}" alt="InfiniteIQ Logo" class="w-10 h-10" loading="lazy">

    <!-- Desktop Nav Links + Search -->
    <div class="hidden md:flex items-center space-x-4">
      <a href="{{ route('home') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Home</a>
      <a href="{{ route('courses') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Courses</a>
      <a href="{{ route('about') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">About Us</a>
      <a href="{{ route('pricing') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Pricing</a>
      <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Contact</a>

      @auth
         <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Dashboard</a>
      @endauth

      <!-- Search bar (diposisikan setelah Contact) -->
      <form action="{{ route('courses') }}" method="GET" class="hidden lg:flex items-center bg-purple-300 rounded-full px-4 py-2 space-x-2 w-[260px]">
        <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <input 
          type="text" 
          name="search"
          value="{{ request('search') }}"
          placeholder="Search Course"
          class="bg-transparent text-base placeholder-purple-800 text-purple-900 flex-1 outline-none focus:ring-0"
        >
        <button type="submit">
          <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
          </svg>
        </button>
      </form>
    </div>
  </div>

  <!-- Right: Auth Buttons & Burger -->
  <div class="flex items-center space-x-2 md:space-x-4">
    @guest
      <a href="{{ route('register') }}" class="text-sm text-gray-700 font-medium hover:text-purple-700">Sign Up</a>
      <a href="{{ route('login') }}" class="bg-purple-600 text-white rounded px-4 py-1.5 text-sm font-medium hover:opacity-80">Login</a>
    @endguest

    @auth
      <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="focus:outline-none">
          <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=8A60A2&color=fff&size=128"
               alt="Profile"
               class="w-9 h-9 rounded-full object-cover border-2 border-purple-500">
        </button>
        <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg py-2 z-50">
          <div class="px-4 py-2 text-sm text-gray-700 font-semibold">
            Hello, {{ auth()->user()->name }}
          </div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
              Logout
            </button>
          </form>
        </div>
      </div>
    @endauth

    <!-- Mobile Burger -->
    <button x-on:click="mobileMenuIsOpen = !mobileMenuIsOpen" aria-label="Toggle mobile menu" class="flex md:hidden items-center text-gray-700">
      <svg x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div x-show="mobileMenuIsOpen" x-transition class="absolute top-0 left-0 w-full bg-white dark:bg-neutral-900 px-6 pt-6 pb-6 shadow-md md:hidden z-20">
    <div class="flex justify-end">
      <button x-on:click="mobileMenuIsOpen = false" aria-label="Close mobile menu" class="text-white font-bold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Mobile Search Bar -->
    <form action="{{ route('courses') }}" method="GET" class="flex items-center bg-purple-300 rounded-full px-4 py-2 space-x-2 mt-4">
      <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <input 
        type="text" 
        name="search"
        value="{{ request('search') }}"
        placeholder="Search Course"
        class="bg-transparent outline-none text-sm placeholder-purple-800 text-purple-900 w-full"
      >
      <button type="submit">
        <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
        </svg>
      </button>
    </form>

    <!-- Mobile Nav Links -->
    <ul class="space-y-2 mt-4">
      <li><a href="{{ route('home') }}" class="block text-lg font-medium text-gray-800 dark:text-white">Home</a></li>
      <li><a href="{{ route('courses') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">Courses</a></li>
      <li><a href="{{ route('about') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">About Us</a></li>
      <li><a href="{{ route('pricing') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">Pricing</a></li>
      <li><a href="{{ route('contact') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">Contact</a></li>

      @guest
      <li><a href="{{ route('login') }}" class="block text-lg font-medium text-purple-600">Login</a></li>
      <li><a href="{{ route('register') }}" class="block text-lg font-medium text-purple-600">Sign Up</a></li>
      @endguest

      @auth
      <li class="border-t pt-4 mt-4">
        <div class="text-gray-800 dark:text-white font-semibold text-lg mb-2">
          Hello, {{ auth()->user()->name }}
        </div>
        <a href="{{ route('dashboard') }}" class="block text-base text-gray-600 dark:text-neutral-300 hover:text-purple-600">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="w-full text-left text-base text-red-600 hover:text-red-700 mt-2">
            Logout
          </button>
        </form>
      </li>
      @endauth
    </ul>
  </div>
</nav>
