@extends('layouts.app')


@section('content')


<div class="min-h-screen bg-[#F1F1F3] text-gray-900">

<div class="container mx-auto px-16 py-10">


    <!-- Hero Section -->
<div class="text-center mb-16">
  <!-- Badge + Heading -->
  <div class="inline-flex items-center px-6 py-4 border border-purple-200 rounded-xl shadow-md bg-white mb-6 relative">
  <!-- Icon -->
  <div class="w-10 h-10 flex items-center justify-center bg-yellow-100 rounded-lg mr-4 text-black">
  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
    <path d="M13 2L3 14h9l-1 8L21 10h-9l1-8z" />
  </svg>
</div>


  <!-- Heading -->
  <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
    <span class="text-[#D32DD3] font-bold">Unlock</span> Your True Potentials
  </h2>
</div>


  <!-- Subtitle -->
  <p class="text-3xl text-gray-700 mb-6">
    with Online Design and Development Courses.
  </p>

  <!-- Search Bar -->
  <div class="flex justify-center mb-6">
    <div class="flex items-center w-full max-w-md bg-[#E8B9FF] rounded-full px-4 py-2">
      <svg class="w-5 h-5 text-gray-700 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
      </svg>
      <input type="text" placeholder="Search Course" class="bg-transparent w-full focus:outline-none text-gray-800 placeholder-gray-600">
      <svg class="w-5 h-5 text-gray-700 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
  </div>

  <!-- Action Buttons -->
  <div class="flex justify-center gap-4">
    <button class="bg-[#8A60A2] text-white font-semibold px-6 py-2 rounded-lg shadow hover:bg-purple-700 transition">
      Explore Courses
    </button>
    <a href="#pricing" class="bg-white text-gray-800 font-semibold px-6 py-2 rounded-lg shadow border border-gray-300 hover:bg-white transition">
  View Pricing
</a>

  </div>
</div>




    <!-- Judul -->
    <h1 class="text-3xl font-bold mb-2">Benefits</h1>


    <!-- Deskripsi -->
    <p class="text-gray-600 mb-8">Berikut adalah beberapa manfaat yang bisa kamu dapatkan:</p>


<!-- Grid Cards -->
@php
    $benefits = [
        [
            'title' => 'Flexible Learning Schedule',
            'desc' => 'Fit your coursework around your existing commitments and obligations.',
        ],
        [
            'title' => 'Expert Instruction',
            'desc' => 'Learn from industry experts who have hands-on experience in design and development.',
        ],
        [
            'title' => 'Diverse Course Offerings',
            'desc' => 'Explore a wide range of design and development courses covering various topics.',
        ],
        [
            'title' => 'Updated Curriculum',
            'desc' => 'Access courses with up-to-date content reflecting the latest trends and industry practices.',
        ],
        [
            'title' => 'Practical Projects and Assignments',
            'desc' => 'Develop a portfolio showcasing your skills and abilities to potential employers.',
        ],
        [
            'title' => 'Interactive Learning Environment',
            'desc' => 'Collaborate with fellow learners, exchanging ideas and feedback to enhance your understanding.',
        ],
    ];
@endphp

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($benefits as $i => $benefit)
        <div class="bg-white shadow-md rounded-xl p-6 flex flex-col aspect-square relative">
            <!-- Angka kanan atas -->
            <div class="absolute top-4 right-4">
                <h1 class="text-6xl font-bold text-black">
                    {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                </h1>
            </div>

            <!-- Judul dan Deskripsi -->
            <div class="flex-grow flex flex-col items-start justify-start text-left mt-36 space-y-2">
                <h3 class="text-3xl font-bold text-gray-900">
                    {{ $benefit['title'] }}
                </h3>
                <p class="text-gray-700 text-lg leading-relaxed">
                    {{ $benefit['desc'] }}
                </p>
            </div>

            <!-- Tombol panah -->
            <div class="flex justify-end mt-auto">
                <button class="w-8 h-8 flex items-center justify-center bg-gray-200 text-[#6A3D8F] rounded-sm hover:bg-gray-300 transition text-2xl">
    ↗
</button>

            </div>
        </div>
    @endforeach
</div>







    <!-- Our Courses Section -->
<div class="mt-16">
    <h2 class="text-3xl font-bold mb-4">Our Courses</h2>
    <p class="text-gray-600 max-w-4xl mb-10">
        Kami menawarkan berbagai kursus yang dapat membantu kamu mengembangkan keterampilan dan pengetahuan di berbagai bidang. Temukan kursus yang sesuai dengan kebutuhanmu dan mulailah perjalanan belajarmu bersama kami.
    </p>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        @foreach ($courses as $course)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Gambar -->
                <img src="{{ asset('images/' . $course->image) }}" alt="{{ $course->title }}" class="w-full h-48 object-cover">


                <div class="p-4">
                    <!-- Info atas -->
                    <div class="flex justify-between items-center text-sm text-gray-500 mb-2">
                        <div class="flex items-center gap-3">
        <!-- Kotak Length -->
        <div class="px-3 py-1 text-sm border border-gray-300 rounded text-gray-700">
            {{ $course->length_value }} {{ $course->length_unit }}
        </div>

        <!-- Kotak Level -->
        <div class="px-3 py-1 text-sm border border-gray-300 rounded text-gray-700">
            {{ ucfirst($course->level) }}
        </div>
    </div>
                        <div class="ml-auto text-right">By {{ $course->instructor->name }}</div>
                    </div>

                    <!-- Judul -->
                    <h3 class="text-lg font-semibold mb-1">{{ $course->title }}</h3>

                    <!-- Rating -->
                    <div class="flex items-center text-yellow-500 text-sm mb-2">
                        <svg class="w-4 h-4 fill-current mr-1" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09L5.64 12.045 1 7.91l6.061-.878L10 2l2.939 5.032L19 7.91l-4.64 4.135 1.518 6.045z"/>
                        </svg>
                        <span>{{ number_format($course->rating, 1) }}</span>
                        <span class="text-gray-600 ml-1">({{ $course->review_count }} reviews)</span>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm">
                        {{ Str::limit($course->description, 120) }}
                    </p>

                    <!-- Tombol Get it now -->
<a href="{{ route('courses.show', $course->id) }}" class="block w-full mt-4 bg-[#F1F1F3] text-black text-center py-2 rounded hover:bg-gray-300 transition duration-200">
    Get it now
</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



<!-- Our Testimonials Section -->
<div class="mt-16">
    <h1 class="text-2xl font-bold mb-4">Our Testimonials</h1>
    <p class="text-gray-600 mb-8">
        Berikut adalah beberapa testimoni dari peserta yang telah mengikuti kursus kami. Mereka berbagi pengalaman dan manfaat yang mereka dapatkan.
    </p>

    @php
        $testimonials = [
            [
                'name' => 'John Doe',
                'desc' => 'Kursus ini sangat membantu saya dalam memahami konsep pemrograman dasar dengan cara yang menyenangkan.',
                'img' => 1,
                'role' => 'Frontend Developer',
            ],
            [
                'name' => 'Jane Smith',
                'desc' => 'Materi yang disampaikan sangat mudah dipahami dan instruktur sangat suportif.',
                'img' => 2,
                'role' => 'UI Designer',
            ],
            [
                'name' => 'Ahmad Yusuf',
                'desc' => 'Saya mendapatkan banyak wawasan dan ilmu baru setelah mengikuti kursus ini.',
                'img' => 3,
                'role' => 'Data Analyst',
            ],
            [
                'name' => 'Lisa Marlina',
                'desc' => 'Belajar di sini memberikan pengalaman belajar yang interaktif dan menyenangkan.',
                'img' => 4,
                'role' => 'Mobile developer',
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6">
        @foreach ($testimonials as $testimonial)
            <div class="bg-white shadow-lg rounded-xl p-6 flex flex-col justify-between">
                <p class="text-gray-700 mb-4">
                    "{{ $testimonial['desc'] }}"
                </p>

                <div class="flex items-center justify-between mt-4">
                    <div class="flex items-center space-x-4">
                        <img src="https://randomuser.me/api/portraits/men/{{ $testimonial['img'] }}.jpg" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full">
                        <div>
                            <p class="font-semibold text-gray-800">{{ $testimonial['name'] }}</p>
                        </div>
                    </div>

                    <div class="bg-[#F7F7F8] text-gray-800 text-sm font-semibold px-4 py-2 rounded-lg">
                        {{ $testimonial['role'] ?? 'Participant' }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<h1 id="pricing" class="text-3xl font-bold mb-4 mt-8">Our Pricing</h1>


 <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-4">
    <!-- Deskripsi -->
    <p class="text-gray-600 md:max-w-xl md:flex-1">
        Pilih paket harga yang sesuai dengan kebutuhanmu. Kami menawarkan opsi bulanan dan tahunan untuk memberikan fleksibilitas.
    </p>

    <!-- Toggle Buttons -->
    <div class="flex justify-center md:justify-end">
        <div class="bg-white p-2 rounded-xl shadow-md inline-flex space-x-2">
            <button id="monthlyBtn" class="px-4 py-2 bg-[#8A60A2] text-white rounded-lg transition">
                Monthly
            </button>
            <button id="yearlyBtn" class="px-4 py-2 bg-white text-black rounded-lg transition">
                Yearly
            </button>
        </div>
    </div>
</div>

<!-- Pricing Cards Container -->
<div class="bg-white p-6 rounded-xl shadow-md max-w-* mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6" id="pricingCards">
        @php
            $plans = [
    'monthly' => [
        [
            'label' => 'Basic Plan',
            'price' => '$19.99',
            'features' => [
                ['text' => 'Access to basic courses', 'available' => true],
                ['text' => 'Community support', 'available' => true],
                ['text' => 'Monthly updates', 'available' => true],
                ['text' => 'Certificate of completion', 'available' => true],
                ['text' => 'Access on mobile and TV', 'available' => true],
                ['text' => 'Offline access', 'available' => false],
                ['text' => 'Priority support', 'available' => false],
                ['text' => 'Downloadable resources', 'available' => false],
                
            ],
        ],
        [
            'label' => 'Premium Plan',
            'price' => '$49.99',
            'features' => [
                ['text' => 'Access to all courses', 'available' => true],
                ['text' => 'Priority support', 'available' => true],
                ['text' => 'Exclusive webinars', 'available' => true],
                ['text' => 'Offline access', 'available' => true],
                ['text' => 'Downloadable resources', 'available' => true],
                ['text' => 'Certificate of completion', 'available' => true],
                ['text' => '1-on-1 mentoring', 'available' => false],
                ['text' => 'Course projects feedback', 'available' => false],
            ],
        ],
    ],
    'yearly' => [
        [
            'label' => 'Basic Plan',
            'price' => '$199.99',
            'features' => [
                ['text' => 'Access to basic courses', 'available' => true],
                ['text' => 'Community support', 'available' => true],
                ['text' => 'Yearly updates', 'available' => true],
                ['text' => 'Certificate of completion', 'available' => true],
                ['text' => 'Access on mobile and TV', 'available' => true],
                ['text' => 'Offline access', 'available' => false],
                ['text' => 'Priority support', 'available' => false],
                ['text' => 'Downloadable resources', 'available' => false],
                
            ],
        ],
        [
            'label' => 'Premium Plan',
            'price' => '$499.99',
            'features' => [
                ['text' => 'Access to all courses', 'available' => true],
                ['text' => 'Priority support', 'available' => true],
                ['text' => 'Exclusive webinars', 'available' => true],
                ['text' => 'Yearly updates', 'available' => true],
                ['text' => 'Offline access', 'available' => true],
                ['text' => '1-on-1 mentoring', 'available' => true],
                ['text' => 'Course projects feedback', 'available' => true],
                ['text' => 'Access on mobile and TV', 'available' => true],
            ],
        ],
    ],
];

        @endphp

        @foreach (['monthly', 'yearly'] as $period)
            @foreach ($plans[$period] as $plan)
                <div class="pricing-card {{ $period }} {{ $period === 'yearly' ? 'hidden' : '' }}">
                    <div class="bg-[#FCFCFD] p-6 rounded-lg h-full flex flex-col justify-between shadow">
                        <!-- Top Section -->
                        <div class="mb-6 text-center">
                            <div class="text-sm font-semibold bg-[#FAF0FF] text-black px-4 py-2 rounded-lg w-full mb-4 border border-black">
    {{ $plan['label'] }}
</div>
                            <h1 class="text-4xl font-bold text-black mb-4 flex items-baseline justify-center space-x-2">
                                <span>{{ $plan['price'] }}</span>
                                <span class="text-sm font-normal text-gray-600">
                                    /{{ $period === 'monthly' ? 'month' : 'year' }}
                                </span>
                            </h1>
                            <div class="bg-white p-4 rounded-lg shadow-sm w-full border border-gray-300 rounded-lg">
                                <ul class="text-gray-700 space-y-3 text-left">
                                    @foreach ($plan['features'] as $feature)
                                        <li class="flex items-center space-x-3">
                                            @if ($feature['available'])
                                                <!-- Kotak kuning dengan centang hitam -->
                                                <div class="flex items-center justify-center w-5 h-5 bg-yellow-100 rounded-sm shrink-0">
                                                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </div>
                                            @else
                                                <!-- Kotak abu-abu dengan tanda silang hitam -->
                                                <div class="flex items-center justify-center w-5 h-5 bg-[#F1F1F3] rounded-sm shrink-0">
                                                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </div>
                                            @endif
                                            <span>{{ $feature['text'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Button -->
                        <button class="w-full py-2 bg-[#8A60A2] text-white rounded-lg hover:bg-purple-700 transition">
                            Get Started
                        </button>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

<div class="bg-white rounded-xl border border-gray-300 p-8 max-w-* mx-auto flex flex-col md:flex-row gap-8 mt-12">
  <!-- Left side: Title & Description -->
  <div class="md:w-1/3 flex flex-col justify-start">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Frequently Asked <br> Questions</h1>
    <p class="text-gray-600 leading-relaxed">
      Still you have any questions? Contact our Team via support@skillbridge.com
    </p>
  </div>

  <!-- Right side: FAQ list -->
  <div class="md:w-2/3 grid grid-cols-1 gap-4">
    @php
      $faqs = [
        ['question' => 'Can I enroll in multiple courses at once?', 'answer' => 'Kami menerima pembayaran melalui transfer bank, kartu kredit, dan e-wallet seperti OVO dan GoPay.'],
        ['question' => 'What kind of support can I expect from instructors?', 'answer' => 'Ya, kami menyediakan trial gratis selama 7 hari untuk semua paket.'],
        ['question' => 'Are the courses self-paced or do they have specific start and end dates?', 'answer' => 'Kamu bisa mengubah paket kapan saja melalui dashboard akun kamu.'],
        ['question' => 'Are there any prerequisites for the courses?', 'answer' => 'Saat ini kursus hanya tersedia secara online melalui platform kami.'],
        ['question' => 'Can I download the course materials for offline access?', 'answer' => 'Ya, kamu akan mendapatkan sertifikat resmi setelah menyelesaikan setiap kursus.'],
      ];
    @endphp

    @foreach ($faqs as $index => $faq)
      <div class="border border-gray-300 rounded-lg overflow-hidden">
        <button type="button" class="faq-toggle flex justify-between items-center w-full px-5 py-3 text-left bg-gray-50 hover:bg-gray-100 transition focus:outline-none" aria-expanded="false" aria-controls="faq-content-{{ $index }}">
          <span class="font-medium text-gray-900">{{ $faq['question'] }}</span>
          <div class="faq-icon-box w-7 h-7 flex items-center justify-center border border-gray-400 rounded-sm transition-transform duration-300">
            <svg class="faq-icon w-4 h-4 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
          </div>
        </button>
        <div id="faq-content-{{ $index }}" class="faq-content max-h-0 overflow-hidden px-5 pt-0 pb-0 text-gray-700 transition-[max-height,padding] duration-300">
          <p class="py-3">{{ $faq['answer'] }}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>



<!-- Toggle Script -->
<script>
    const monthlyBtn = document.getElementById("monthlyBtn");
const yearlyBtn = document.getElementById("yearlyBtn");

monthlyBtn.addEventListener("click", function () {
    // Tampilkan konten monthly, sembunyikan yearly
    document.querySelectorAll(".monthly").forEach(el => el.classList.remove("hidden"));
    document.querySelectorAll(".yearly").forEach(el => el.classList.add("hidden"));

    // Style tombol Monthly aktif
    monthlyBtn.classList.add("bg-[#8A60A2]", "text-white");
    monthlyBtn.classList.remove("bg-white", "text-black");

    // Style tombol Yearly nonaktif
    yearlyBtn.classList.remove("bg-[#8A60A2]", "text-white");
    yearlyBtn.classList.add("bg-white", "text-black");
});

yearlyBtn.addEventListener("click", function () {
    // Tampilkan konten yearly, sembunyikan monthly
    document.querySelectorAll(".yearly").forEach(el => el.classList.remove("hidden"));
    document.querySelectorAll(".monthly").forEach(el => el.classList.add("hidden"));

    // Style tombol Yearly aktif
    yearlyBtn.classList.add("bg-[#8A60A2]", "text-white");
    yearlyBtn.classList.remove("bg-white", "text-black");

    // Style tombol Monthly nonaktif
    monthlyBtn.classList.remove("bg-[#8A60A2]", "text-white");
    monthlyBtn.classList.add("bg-white", "text-black");
});

    document.querySelectorAll('.faq-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const content = button.nextElementSibling;
      const iconPath = button.querySelector('.faq-icon path');
      const isExpanded = button.getAttribute('aria-expanded') === 'true';

      if (isExpanded) {
  content.style.maxHeight = null;
  content.style.paddingTop = '0';
  content.style.paddingBottom = '0';
  content.style.marginBottom = '0'; // hilangkan margin saat ditutup
  button.setAttribute('aria-expanded', 'false');
  iconPath.setAttribute('d', 'M12 4v16m8-8H4');
} else {
  content.style.maxHeight = content.scrollHeight + 'px';
  content.style.paddingTop = '0.75rem';
  content.style.paddingBottom = '0.75rem';
  content.style.marginBottom = '1rem'; // margin bawah saat dibuka (16px)
  button.setAttribute('aria-expanded', 'true');
  iconPath.setAttribute('d', 'M6 18L18 6M6 6l12 12');
}

    });
  });
</script>

</div>
@endsection