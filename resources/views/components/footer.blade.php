<footer class="bg-white text-gray-700 px-6 py-10">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Logo & Contact Info -->
        <div>
            <img src="{{ asset('images/InfiniteIQ.webp') }}" alt="Logo" class="w-10 h-10 mb-4">
            <ul class="space-y-2 text-sm">
                <li class="flex items-center gap-2">
                    📧 hello@infiniteiq.com
                </li>
                <li class="flex items-center gap-2">
                    📞 +91 91813 23 2309
                </li>
                <li class="flex items-center gap-2">
                    📍 Surabaya , Siwalankerto 24-L
                </li>
            </ul>
        </div>

        <!-- Home Links -->
        <div>
            <h3 class="font-semibold mb-3">Explore</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}#benefits" class="hover:underline">Benefits</a></li>
                <li><a href="{{ route('courses') }}" class="hover:underline">Our Courses</a></li>
                <li><a href="{{ route('home') }}#testimonials" class="hover:underline">Testimonials</a></li>
                <li><a href="{{ route('home') }}#faq" class="hover:underline">FAQ</a></li>
            </ul>
        </div>

        <!-- About Us -->
        <div>
            <h3 class="font-semibold mb-3">About Us</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('about') }}#company" class="hover:underline">Company</a></li>
                <li><a href="{{ route('about') }}#achievements" class="hover:underline">Achievements</a></li>
                <li><a href="{{ route('about') }}#goals" class="hover:underline">Our Goals</a></li>
            </ul>
        </div>

        <!-- Social Profiles -->
        <div>
            <h3 class="font-semibold mb-3">Connect with Us</h3>
            <div class="flex gap-3">
                <a href="https://facebook.com" target="_blank" class="p-2 bg-gray-100 rounded hover:bg-gray-200">
                    <i class="fab fa-facebook-f text-gray-600"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="p-2 bg-gray-100 rounded hover:bg-gray-200">
                    <i class="fab fa-twitter text-gray-600"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" class="p-2 bg-gray-100 rounded hover:bg-gray-200">
                    <i class="fab fa-linkedin-in text-gray-600"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="mt-10 border-t pt-4 text-center text-sm text-gray-500">
        © {{ date('Y') }} InfiniteIQ. All rights reserved.
    </div>
</footer>
