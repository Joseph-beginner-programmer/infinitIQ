@extends('layouts.app')

@section('content')

  <main class="max-w-8xl mx-auto px-4 sm:px-8 lg:px-24 py-12 mt-24">

    <!-- 🔹 Judul & Deskripsi -->
    <section class="grid md:grid-cols-2 gap-10 mb-12">
      <h2 class="text-4xl font-bold md:mt-14">Our Pricings</h2>
      <p class="text-gray-600 ml-auto">
Welcome to InfiniteIQ's Pricing Plan page, where we offer two comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and affordable pricing options for our services. Whether you're an individual looking to enhance your skills or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the one that best fits your requirements.
      </p>
    </section>

    <hr class="border-t border-gray-200 mb-16 -mx-12">

        <div class="flex justify-center md:justify-center">
        <div class="bg-white p-2 rounded-xl shadow-md inline-flex space-x-2">
            <button id="monthlyBtn" class="px-4 py-2 bg-[#8A60A2] text-white rounded-lg transition">
                Monthly
            </button>
            <button id="yearlyBtn" class="px-4 py-2 bg-white text-black rounded-lg transition">
                Yearly
            </button>
        </div>
    </div>


    <div class="bg-white p-6 rounded-xl shadow-md max-w-* mx-auto mt-12">
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
                            ['text' => 'Offline access', 'available' => false],
                            ['text' => 'Priority support', 'available' => false],
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
                            ['text' => '1-on-1 mentoring', 'available' => false],
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
                            ['text' => 'Offline access', 'available' => false],
                            ['text' => 'Priority support', 'available' => false],
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




       

  </main>

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
@endsection