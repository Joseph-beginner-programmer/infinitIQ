@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Override font family globally */
    body {
      font-family: 'Be Vietnam Pro', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- ✅ Container Utama -->
  <main class="max-w-8xl mx-auto px-24 py-12">

    <!-- 🔹 Judul & Deskripsi -->
    <section class="grid md:grid-cols-2 gap-10 mb-12 mt-16">
      <h2 class="text-4xl font-bold mt-8">Contact Us</h2>
      <p class="text-gray-600 ml-30">
        Welcome to InfiniteIQ Pricing Plan page, where we offer two comprehensive<br> options to cater to your needs: Free and Pro. 
        We believe in providing flexible<br> and affordable pricing options for our services. Whether you're an individual<br> looking 
        to enhance your skills or a business seeking professional<br> development solutions, we have a plan that suits you. 
        Explore our pricing<br> options below and choose the one that best fits your requirements.
      </p>
    </section>

    <hr class="border-t border-gray-200 mb-16 -mx-12">

    <!-- 🔹 Form & Info Kontak -->
    <section class="grid md:grid-cols-3 gap-8 bg-white p-8 rounded-lg shadow-md mb-32">

      <!-- 🔸 Form -->
      <form class="md:col-span-2 space-y-6 pl-12 pt-12">
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label for="firstName" class="block mb-2 font-medium">First Name</label>
            <input type="text" id="firstName" placeholder="Enter First Name" class="w-full px-4 py-3 bg-gray-50 rounded border border-gray-300">
          </div>
          <div>
            <label for="lastName" class="block mb-2 font-medium">Last Name</label>
            <input type="text" id="lastName" placeholder="Enter Last Name" class="w-full px-4 py-3 bg-gray-50 rounded border border-gray-300">
          </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label for="email" class="block mb-2 font-medium">Email</label>
            <input type="email" id="email" placeholder="Enter your Email" class="w-full px-4 py-3 bg-gray-50 rounded border border-gray-300">
          </div>
          <div>
            <label for="phone" class="block mb-2 font-medium">Phone</label>
            <input type="tel" id="phone" placeholder="Enter Phone Number" class="w-full px-4 py-3 bg-gray-50 rounded border border-gray-300">
          </div>
        </div>

        <div>
          <label for="subject" class="block mb-2 font-medium">Subject</label>
          <input type="text" id="subject" placeholder="Enter your Subject" class="w-full px-4 py-3 bg-gray-50 rounded border border-gray-300 mb-2">
        </div>

        <div>
          <label for="message" class="block mb-2 mt-2 font-medium">Message</label>
          <textarea id="message" rows="5" placeholder="Enter your Message here..." class="w-full px-4 py-4 bg-gray-50 rounded border border-gray-300"></textarea>
        </div>

        <div class="flex justify-center">
          <button type="submit" class="px-6 py-3 text-white rounded-md hover:opacity-90 transition mt-10" style="background-color: #8A60A2;">
            Send Your Message
          </button>
        </div>
      </form>

      <!-- 🔸 Info Kontak dengan Garis Pemisah -->
       <div class="flex md:pl-6">
<div class="border-l border-gray-200">
  <div class="space-y-6 pl-14">
        <!-- Email -->
         <div class="mt-12">
         <div class="flex justify-center">
        <div class="bg-gray-50 p-6 rounded-md border text-center flex flex-col items-center justify-center w-72 min-h-[140px]">
          <a href="#" class="w-12 aspect-square flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded mb-3">
  <i class="fas fa-envelope text-xl"></i>
</a>
          <p class="font-medium">hello@infiniteiq.com</p>
        </div>
        </div>
        </div>

        <!-- Phone -->
         <div class="flex justify-center">
        <div class="bg-gray-50 p-6 rounded-md border text-center flex flex-col items-center justify-center w-72 min-h-[140px]">
          <a href="#" class="w-12 aspect-square flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded mb-3">
      <i class="fas fa-phone text-xl"></i>
    </a>
          <p class="font-medium">+91 91813 23 2309</p>
        </div>
        </div>

        <!-- Location -->
         <div class="flex justify-center">
        <div class="bg-gray-50 p-6 rounded-md border text-center flex flex-col items-center justify-center w-72 min-h-[140px]">
          <a href="#" class="w-12 aspect-square flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded mb-3">
      <i class="fas fa-map-marker-alt text-xl"></i>
    </a>
          <p class="font-medium">Somewhere in the World</p>
        </div>
        </div>

        <!-- Social -->
         <div class="pb-12">
        <div class="flex justify-center">
  <div class="bg-gray-50 p-6 rounded-md border text-center flex flex-col items-center justify-center w-72 min-h-[140px]">
    <div class="flex gap-3 mb-3">
      <a href="#" class="w-10 aspect-square flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="w-10 aspect-square flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="w-10 aspect-square flex items-center justify-center bg-gray-100 hover:bg-gray-200 rounded">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <p class="font-medium">Social Profiles</p>
  </div>
    </div>
</div>
</div>
      </div>
            </div>

    </section>

  </main>
</body>
</html>

@endsection