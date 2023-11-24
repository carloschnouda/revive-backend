<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @php
            if (Route::currentRouteName() == 'single-service') {
                $seo = new stdClass();
                $seo->title = isset($service->title) ? $service->title : 'Revive | Serives';
                $seo->image = isset($service->seo_image) ? Storage::url($service->seo_image) : '';
                // Limit the description to 160 characters (you can adjust this value)
                $maxLength = 160;
                $rawDescription = isset($service->description) ? $service->description : '';
                $seo->description = substr(strip_tags($rawDescription), 0, $maxLength);
            }
        @endphp

        <!-- Primary Meta Tags -->
        <title>{{ $seo->title }}</title>
        <meta name="title" content="{{ $seo->title }}">
        <meta name="description" content="{{ $seo->description }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $seo->title }}">
        <meta property="og:description" content="{{ $seo->description }}">
        <meta property="og:image" content="{{ Storage::url($seo->image) }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ $seo->title }}">
        <meta property="twitter:description" content="{{ $seo->description }}">
        <meta property="twitter:image" content="{{ Storage::url($seo->image) }}">

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        {{-- @vite('resources/css/app.css') --}}
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {},
                    container: {
                        center: true,
                        padding: {
                            DEFAULT: '1rem',
                            sm: '2rem',
                            lg: '4rem',
                            xl: '5rem',
                            '2xl': '6rem',
                        },
                    },
                    aspectRatio: {
                        '1/2': '1 / 2',
                    },
                },
            }
        </script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- FavIcon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

    </head>

    <body>

        {{ $slot }}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

        <!-- Include Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/revive.js') }}"></script>
    </body>

</html>
