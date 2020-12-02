<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
                <svg class="w-8 text-blue-300 hover:text-blue-500 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                <span class="text-xs text-blue-300">
                    beranda
                </span>
            </div>
        </a>

        <a href="#">
            <div class="mx-2 py-2 px-4 duration-200 text-white grid place-items-center">
                <svg class="w-8 text-blue-300 hover:text-blue-500 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-xs text-blue-400">
                    Artikel
                </span>
            </div>
        </a>

        <a href="#">
            <div class="mx-2 py-2 px-4 duration-200 text-white grid place-items-center">
                <svg class="w-8 text-blue-500 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                </svg>
                <span class="text-xs text-blue-500">
                    Data Bayi
                </span>
            </div>
        </a>


    </nav>

    <header class="flex justify-between items-center w-full mt-12 md:mt-32 mx-5 md:mx-16 mb-32 flex-wrap ">

        <div class="w-3/4 md:w-2/6">
            <h1 class="text-2xl text-white md:text-black md:text-4xl font-medium">
                Data Kesehatan
                <br>
                Bayi
            </h1>

        </div>

        <img class="fixed right-0 mt-16 md:mt-8 transform md:scale-125 -mr-24 md:mr-0" style="z-index: -1;" src="{{ asset('img/landing.svg') }}">

    </header>

    <section class="w-screen h-screen overflow-scroll mt-20 pb-20  md:hidden bg-gray-100 rounded-tr-3xl rounded-tl-3xl">
        <div class="mx-8 pt-8">
            <div class="pt-2 block text-gray-600">
                <input class="input-search-full text-sm focus:outline-none " type="search" name="search" placeholder="Pencarian">
                <!-- svg search -->
                <button type="submit" class="absolute mt-6 -ml-8">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
                <!-- svg search -->
            </div>

            <div class="mt-4 mx-1">

                <div class="bg-white w-full rounded-2xl shadow-lg p-6 mt-4">
                    <div class="flex flex-col">
                        <div>
                            <span class="text-xl font-semibold">Rizal Elsa Fany</span>
                            &nbsp; icon gender
                        </div>
                        <div class="text-sm text-gray-600">Umur : 2 bulan </div>
                    </div>

                    <!-- container data -->
                    <div class="flex justify-around">
                        <div class="mt-4 flex flex-col items-center">
                            <div>icon bb</div>
                            <div class="text-red-500">
                                <b class="text-3xl">3,8</b>
                                KG</div>
                            <div class="text-sm text-gray-600">Berat badan</div>
                            <div class="text-sm text-red-500">Dibawah rata-rata</div>
                        </div>

                        <div class="mt-4 flex flex-col items-center">
                            <div>icon tb</div>
                            <div class="text-blue-400">
                                <b class="text-3xl">56,1</b>
                                CM</div>
                            <div class="text-sm text-gray-600">Tinggi badan</div>
                            <div class="text-sm text-blue-400">Ideal</div>
                        </div>
                    </div>
                    <!-- container data -->

                </div>

                <div class="bg-white w-full rounded-2xl shadow-lg p-6 mt-4">
                    <div class="flex flex-col">
                        <div>
                            <span class="text-xl font-semibold">Rizal Elsa Fany</span>
                            &nbsp; icon gender
                        </div>
                        <div class="text-sm text-gray-600">Umur : 2 bulan </div>
                    </div>

                    <!-- container data -->
                    <div class="flex justify-around">
                        <div class="mt-4 flex flex-col items-center">
                            <div>icon bb</div>
                            <div class="text-red-500">
                                <b class="text-3xl">3,8</b>
                                KG</div>
                            <div class="text-sm text-gray-600">Berat badan</div>
                            <div class="text-sm text-red-500">Dibawah rata-rata</div>
                        </div>

                        <div class="mt-4 flex flex-col items-center">
                            <div>icon tb</div>
                            <div class="text-blue-400">
                                <b class="text-3xl">56,1</b>
                                CM</div>
                            <div class="text-sm text-gray-600">Tinggi badan</div>
                            <div class="text-sm text-blue-400">Ideal</div>
                        </div>
                    </div>
                    <!-- container data -->

                </div>

                

            </div>


        </div>
    </section>

    <script src="{!! mix('js/app.js') !!}"></script>

</body>

</html>