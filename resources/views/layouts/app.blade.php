<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="BoM 2025">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

    {{-- Sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- Alpine js --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <!-- TW Elements styles-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" />

    {{-- Google font apis --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">



    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- flaticon --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    {{-- GSAP & lenis--}}
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.19/dist/lenis.css">

    <title>Document</title>

    <style>
        .font-roboto {
            font-family: 'Roboto', sans-serif;
        }

        .bg-primary-purple {
            background-color: #8A60A2;
        }

        .border-primary-purple {
            border-color: #8A60A2;
        }

        .body {
            margin: 0;
        }
    </style>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


</head>

<body class="overflow-x-hidden min-h-[70rem] bg-zinc-100">

    <div class="bg-zinc-100 w-full max-w-screen-sm lg:max-w-none pt-10 mx-auto px-4 overflow-wrap break-word h-screen">
        @yield('content')
    </div>

</body>

</html>