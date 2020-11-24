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

<body class="bg-green-500 md:bg-white h-screen duration-300">
    <nav class="hidden md:flex w-full h-16 bg-gray-100 items-center justify-between shadow-sm">
        <div class="nav-logo pl-16"> Sigenting</div>
        <div class="nav-menu pr-16">
            <div class="nav-link">
                <a href="{{route('login')}}" class="button ml-2 py-2 border border-green-500 text-green-700 hover:bg-green-500 hover:text-white duration-200">Masuk</a>
            </div>
        </div>
    </nav>
    <main class="flex justify-between items-center w-full pt-12 md:pt-32 px-5 md:px-16 flex-wrap">
        <div class="w-3/4 md:w-2/6">
            <h1 class="text-2xl text-white md:text-black md:text-4xl font-bold pb-4">
                Sistem Informasi Pencegahan Stunting
            </h1>
            <p class="hidden md:inline text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nisi veritatis quidem corporis a ex natus blanditiis numquam facilis. Quo iure harum molestias eum, similique qui fuga soluta necessitatibus itaque? Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="pt-12">
                <a href="{{route('berita.list')}}" class="hidden md:inline button py-3 bg-green-500 text-white hover:bg-green-700 duration-200">Baca Artikel</a>
                <a href="{{route('login')}}" class="px-10 button ml-2 py-3 border bg-white border-green-500 text-green-700 hover:bg-green-500 hover:text-white duration-200">Masuk</a>
            </div>
        </div>
        <div class="hidden md:inline w-2/5">
            <div id="slideshow" class="border border-gray-700 h-64 overflow-hidden">
                <div class="bg-green-400 slide w-full h-full">
                    <p>slideshow berita 1</p>
                </div>
                <div class="bg-green-400 slide w-full h-full">
                    <p class="font-bold">slideshow berita 2</p>
                </div>
                <div class="bg-green-400 slide w-full h-full">
                    <p>slideshow berita 1</p>
                </div>
                <div class="bg-green-400 slide w-full h-full">
                    <p class="font-bold">slideshow berita 2</p>
                </div>
            </div>
        </div>

    </main>
    <section class="bottom-0 mt-20 md:hidden w-screen h-full bg-white rounded-tr-3xl rounded-tl-3xl">
        
    </section>

    <script src="{!! mix('js/app.js') !!}"></script>
    <script>
        (function($) {
            "use strict";
            var slideshow = (function() {
                var counter = 0,
                    i,
                    j,
                    slides = $("#slideshow .slide"),
                    slidesLen = slides.length - 1;
                for (i = 0, j = 9999; i < slides.length; i += 1, j -= 1) {
                    $(slides[i]).css("z-index", j);
                }
                return {
                    startSlideshow: function() {
                        window.setInterval(function() {
                            if (counter === 0) {
                                slides.eq(counter).fadeOut();
                                counter += 1;
                            } else if (counter === slidesLen) {
                                counter = 0;
                                slides.eq(counter).fadeIn(function() {
                                    slides.fadeIn();
                                });
                            } else {
                                slides.eq(counter).fadeOut();
                                counter += 1;
                            }
                        }, 4000);
                    }
                };
            }());
            slideshow.startSlideshow();
        }(jQuery));
    </script>
</body>

</html>