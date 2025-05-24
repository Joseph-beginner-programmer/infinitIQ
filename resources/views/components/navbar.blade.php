<nav x-data="{ mobileMenuIsOpen: false }" x-on:click.away="mobileMenuIsOpen = false" class="relative flex items-center justify-between px-4 py-3 md:px-6 md:py-4 shadow-sm" aria-label="penguin ui menu">

  <!-- Left Section: Logo & Desktop Nav -->
  <div class="flex items-center space-x-6">
    <img src="{{ asset('images/InfiniteIQ.webp') }}" alt="InfiniteIQ Logo" class="w-10 h-10" loading="lazy">

    <!-- Desktop Nav Links -->
    <div class="hidden md:flex space-x-4">
      <a href="{{ route('home') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Home</a>
      <a href="{{ route('courses') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Courses</a>
      <a href="{{ route('about') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">About Us</a>
      <a href="{{ route('pricing') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Pricing</a>
      <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md font-medium text-gray-700 hover:text-purple-700 hover:bg-gray-100">Contact</a>
    </div>
  </div>

  <!-- Center: Search bar (Desktop Only) -->
  <div class="hidden lg:flex items-center bg-purple-300 rounded-full px-4 py-2 space-x-2">
    <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    <input type="text" placeholder="Search Course" class="bg-transparent outline-none text-sm w-36 placeholder-purple-800 text-purple-900">
    <svg class="w-5 h-5 text-purple-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
    </svg>
  </div>

  <!-- Right: Sign Up, Login, Mobile Burger -->
  <div class="flex items-center space-x-2 md:space-x-4">
    <a href="{{ route('register') }}" class="text-sm text-gray-700 font-medium hover:text-purple-700">Sign Up</a>
    <a href="{{ route('login') }}" class="bg-purple-600 text-white rounded px-4 py-1.5 text-sm font-medium hover:opacity-80">Login</a>

    <!-- Mobile Burger Button -->
    <button x-on:click="mobileMenuIsOpen = !mobileMenuIsOpen" aria-label="Toggle mobile menu" class="flex md:hidden items-center text-gray-700">
      <svg x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Mobile Dropdown Menu -->
  <div x-show="mobileMenuIsOpen" x-transition class="absolute top-0 left-0 w-full bg-white dark:bg-neutral-900 px-6 pt-20 pb-6 shadow-md md:hidden z-20">

    <!-- Close Button inside dropdown (burger style) -->
    <div class="flex justify-end">
      <button x-on:click="mobileMenuIsOpen = false" aria-label="Close mobile menu" class="text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <ul class="space-y-4 mt-4">
      <li><a href="{{ route('home') }}" class="block text-lg font-medium text-gray-800 dark:text-white">Home</a></li>
      <li><a href="{{ route('courses') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">Courses</a></li>
      <li><a href="{{ route('about') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">About Us</a></li>
      <li><a href="{{ route('pricing') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">Pricing</a></li>
      <li><a href="{{ route('contact') }}" class="block text-lg font-medium text-gray-600 dark:text-neutral-300">Contact</a></li>
    </ul>
  </div>
</nav>
