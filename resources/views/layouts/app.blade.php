<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset ('output.css') }}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Home Page</title>
    </head>
<body>
        @include('components.navbar')
        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{ asset ('js/swipe.js') }}"></script>


    </body>
</html>
