<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body class="bg-blue-500 md:bg-white duration-300 overflow-x-hidden">

    <div class="hidden md:block">
        <div class="pc-blocker">
            Halaman ini hanya dapat di akses melalui perangkat mobile :(
        </div>
    </div>


    <nav class="fixed bottom-0 bg-gray-200 w-full h-16 shadow-lg z-40 flex items-center justify-center">

        <a href="#">
            <div class="mx-2 py-2 px-4 duration-200 text-white grid place-items-center">
                <svg class="w-8 text-blue-500 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                    </path>
                </svg>
                <span class="text-xs text-blue-500">
                    beranda
                </span>
            </div>
        </a>

        <a href="#">
            <div class="mx-2 py-2 px-4 duration-200 text-white grid place-items-center">
                <svg class="w-8 text-blue-300 hover:text-blue-500 fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-xs text-blue-400">
                    Artikel
                </span>
            </div>
        </a>

        <a href="#">
            <div class="mx-2 py-2 px-4 duration-200 text-white grid place-items-center">
                <svg class="w-8 text-blue-300 hover:text-blue-500 fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                    </path>
                </svg>
                <span class="text-xs text-blue-400">
                    Data Bayi
                </span>
            </div>
        </a>


    </nav>

    @yield('content')

    <script src="{!! mix('js/app.js') !!}"></script>
</body>

</html>