@extends('layouts.app')

@section('content')
<body class="bg-gray-50 text-gray-800">

  <!-- ✅ Container Utama -->
  <main class="max-w-8xl mx-auto px-4 sm:px-8 lg:px-24 py-12 mt-24" id="company">

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
         <h1 class="text-3xl font-bold mb-2" id="achievements">Achivements</h1>

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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-people-fill text-purple-600" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
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
                       <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trophy-fill text-purple-600" viewBox="0 0 16 16">
                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935"/>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-heart text-purple-600" viewBox="0 0 16 16">
                        <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-raised-hand text-purple-600" viewBox="0 0 16 16">
                        <path d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207"/>
                        <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
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
         <h1 class="text-3xl font-bold mb-2" id="goals">Our Goals</h1>

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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-mortarboard-fill text-purple-600" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-lightbulb-fill text-purple-600" viewBox="0 0 16 16">
                        <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5"/>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-globe2 text-purple-600" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-graph-up-arrow text-purple-600" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
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