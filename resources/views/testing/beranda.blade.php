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

    <style>
        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-blue-500 md:bg-white duration-300 overflow-x-hidden">

    <svg class="hidden md:block absolute bottom-0 left-0" style="z-index: -1;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,96L120,128C240,160,480,224,720,261.3C960,299,1200,309,1320,314.7L1440,320L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>


    <nav class="hidden bg-blue-500 md:flex w-full h-16 items-center justify-between shadow-sm">
        <div class="nav-logo pl-16 text-white"> Sigenting</div>
        <!-- <div class="nav-menu pr-16">
            <div class="nav-link">
                <a href="{{route('login')}}" class="button ml-2 py-2 duration-200 text-white hover:text-blue-500 border border-white hover:bg-blue-500">Masuk</a>
            </div>
        </div> -->
    </nav>

    <main class="flex justify-between items-center w-full mt-12 md:mt-32 mx-5 md:mx-16 flex-wrap ">

        <div class="w-3/4 md:w-2/6">
            <h1 class="text-2xl text-white md:text-black md:text-4xl font-bold">
                Sistem Informasi Pencegahan Stunting
            </h1>
            <p class="hidden md:inline text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nisi veritatis quidem corporis a ex natus blanditiis numquam facilis. Quo iure harum molestias eum, similique qui fuga soluta necessitatibus itaque? Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="pt-12">
                <a href="{{route('berita.list')}}" class="hidden md:inline button py-3 bg-blue-500 text-white hover:bg-blue-700 duration-200">Baca Artikel</a>
                <a href="{{route('login')}}" class="px-10 button ml-2 py-3 border bg-white border-blue-500 text-blue-700 hover:bg-blue-500 hover:text-white duration-200">Masuk</a>
            </div>
        </div>

        <img class="fixed right-0 mt-16 md:mt-8 transform md:scale-125 -mr-24 md:mr-0" style="z-index: -1;" src="{{ asset('img/landing.svg') }}">

    </main>
    <section class="w-screen mt-20 pb-20  md:hidden bg-white rounded-tr-3xl rounded-tl-3xl">
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

            <div class="flex justify-between pt-4 mx-4 text-lg font-bold">
                <span class="text-gray-800">Artikel terbaru</span>
                <span>
                    <a href="{{route('berita.list')}}" class="text-gray-600 hover:text-gray-800">Lihat semua</a>
                </span>
            </div>

            <div class="w-full mt-8 mx-2 overflow-hidden rounded-xl">
                <div class="inline carousel">
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                                <div class="container mx-auto">
                                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                        <p class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>
                                        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">

                                <div class="container mx-auto">
                                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                        <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>
                                        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

                                <div class="container mx-auto">
                                    <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                        <p class="text-black text-2xl my-4">Brown and blue hardbound book</p>
                                        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="{!! mix('js/app.js') !!}"></script>

</body>

</html>