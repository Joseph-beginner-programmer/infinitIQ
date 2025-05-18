<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script> <!-- ✅ Tailwind CDN resmi -->
    <script src="https://unpkg.com/alpinejs" defer></script>

    <!-- Font Awesome CDN -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <!-- Navbar -->
    <x-navbar />

    <!-- Main Content (flex-grow untuk isi halaman) -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer (selalu di bawah) -->
    <x-footer />
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
