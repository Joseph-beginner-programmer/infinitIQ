@extends('layouts.app')

@section('content')
<body class="bg-gray-50 text-gray-800">

  <!-- ✅ Container Utama -->
  <main class="max-w-8xl mx-auto px-4 sm:px-8 lg:px-24 py-12">

    <!-- 🔹 Judul & Deskripsi -->
    <section class="grid md:grid-cols-2 gap-10 mb-12">
      <h2 class="text-4xl font-bold md:mt-14">About InfiniteIQ</h2>
      <p class="text-gray-600 ml-auto">
        Welcome to our platform, where we are passionate about empowering individuals to master the world of design and 
        development. We offer a wide range of online courses designed to equip learners with the skills and knowledge 
        needed to succeed in the ever-evolving digital landscape.
      </p>
    </section>

    <hr class="border-t border-gray-200 mb-16 -mx-12">

    <div>
         <!-- Judul -->
         <h1 class="text-3xl font-bold mb-2">Achivements</h1>

        <!-- Deskripsi -->
        <p class="text-gray-600 mb-8">Our commitment to excellence has led us to achieve significant milestones along our 
            journey. Here are some of our notable achievements
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Trusted by Thousands</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    We have successfully served thousands of students, helping them unlock their potential and achieve their career goals.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Award-Winning Courses</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    Our courses have received recognition and accolades in the industry for their quality, depth of content, and effective teaching methodologies.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Positive Student Feedback</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    We take pride in the positive feedback we receive from our students, who appreciate the practicality and relevance of our course materials.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Industry Partnerships</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    We have established strong partnerships with industry leaders, enabling us to provide our students with access to the latest tools and technologies
                    </p>
                </div>
            </div>
    </div>

    <div class="pt-20">
         <!-- Judul -->
         <h1 class="text-3xl font-bold mb-2">Our Goals</h1>

        <!-- Deskripsi -->
        <p class="text-gray-600 mb-8">At SkillBridge, our goal is to empower individuals from all backgrounds to thrive in 
            the world of design and development. We believe that education should be accessible and transformative, 
            enabling learners to pursue their passions and make a meaningful impact. 
            Through our carefully crafted courses, we aim to
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Provide Practical Skills</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    We focus on delivering practical skills that are relevant to the current industry demands. Our courses are designed to equip learners with the knowledge and tools needed to excel in their chosen field.
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Foster Creative Problem-Solving</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    We encourage creative thinking and problem-solving abilities, allowing our students to tackle real-world challenges with confidence and innovation.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Promote Collaboration and Community</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    We believe in the power of collaboration and peer learning. Our platform fosters a supportive and inclusive community where learners can connect, share insights, and grow together.
                    </p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl p-6 shadow-sm flex items-start gap-4">
                <div class="py-4">
                    <!-- Icon box -->
                    <div class="w-12 h-12 bg-purple-100 p-3 rounded-xl border border-pink-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15 8l6 .5-4.5 4 1 6-5.5-3-5.5 3 1-6L3 8.5 9 8z"/>
                        </svg>
                    </div>
                    <!-- Text content -->
                    <h3 class="text-lg font-semibold mt-1 pt-3">Stay Ahead of the Curve</h3>
                    <p class="text-gray-600 text-sm mt-1">
                    The digital landscape is constantly evolving, and we strive to stay at the forefront of industry trends. We regularly update our course content to ensure our students receive the latest knowledge and skills.
                </div>
            </div>
    </div>

  </main>
</body>
@endsection