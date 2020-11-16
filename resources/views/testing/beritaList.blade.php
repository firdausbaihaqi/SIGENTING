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

<body class="bg-gray-100 mx-32">
    <section class="mt-12">

        <h1 class=" text-4xl text-left">Artikel seputar gizi</h1>
        <p>tips-tips dan informasi seputar gizi balita </p>
        <div class="mobile-blocker md:hidden">Hanya boleh dibuka lewat pc atau layar tablet :(</div>

        <div class="headline-container">
            <!-- bagian kiri -->
            <a href="#" class="col-span-3 posts-container" style="height: 50vh;">

                <div class="posts-bg" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
                background-size: cover;">
                    <div class="overlay-gray"></div>
                </div>
                <div class="posts-info text-xl lg:text-2xl text-white">
                    <p>Judul Artikel</p>
                    <p>Tanggal Upload</p>
                </div>
            </a>
            <!-- akhir bagian kiri -->
            <!-- bagian kanan -->
            <div class="col-span-4 grid grid-cols-2 gap-1">
                <a href="#" class="posts-container">
                    <div class="posts-bg" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>
                    <div class="posts-info-secondary text-sm lg:text-lg text-white">
                        <p>Judul Artikel</p>
                        <p>Tanggal Upload</p>
                    </div>
                </a>
                <a href="#" class="posts-container">
                    <div class="posts-bg" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>
                    <div class="posts-info-secondary text-sm lg:text-lg text-white">
                        <p>Judul Artikel</p>
                        <p>Tanggal Upload</p>
                    </div>
                </a>
                <a href="#" class="posts-container">
                    <div class="posts-bg" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>
                    <div class="posts-info-secondary text-sm lg:text-lg text-white">
                        <p>Judul Artikel</p>
                        <p>Tanggal Upload</p>
                    </div>
                </a>
                <a href="#" class="posts-container">
                    <div class="posts-bg" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>
                    <div class="posts-info-secondary text-sm lg:text-lg text-white">
                        <p>Judul Artikel</p>
                        <p>Tanggal Upload</p>
                    </div>
                </a>
                <!-- akhir bagian kanan -->

            </div>
        </div>

    </section>
    <section class="my-12">
        <div class="pt-2 block text-gray-600">
            <input class="input-search-lg text-sm focus:outline-none " type="search" name="search" placeholder="Pencarian">
            <!-- svg search -->
            <button type="submit" class="absolute mt-4 -ml-8">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
            <!-- svg search -->

        </div>
        <div class="w-3/4 grid">
            <a href="#" class="posts-card-link">
                <div class="posts-card-container">

                    <div class="posts-card-img" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
                background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>

                    <div class="posts-card-info">
                        <div class="ml-4 mt-2 text-xl lg:text-3xl text-black">
                            <p>Judul Artikel</p>
                        </div>
                        <div class="h-24 ml-4 text-sm lg:text-base text-gray-700 overflow-hidden mr-12">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga debitis velit nobis culpa molestiae, iusto sint quod eos eum ullam a iure nihil maxime deserunt laboriosam eveniet impedit est veniam! Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="mt-6 ml-4 text-gray-700 text-base lg:text-lg">
                            <p>Tanggal</p>
                        </div>

                    </div>

                </div>
            </a>

            <a href="#" class="posts-card-link">
                <div class="posts-card-container">

                    <div class="posts-card-img" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
                background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>

                    <div class="posts-card-info">
                        <div class="ml-4 mt-2 text-xl lg:text-3xl text-black">
                            <p>Judul Artikel</p>
                        </div>
                        <div class="h-24 ml-4 text-sm lg:text-base text-gray-700 overflow-hidden mr-12">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga debitis velit nobis culpa molestiae, iusto sint quod eos eum ullam a iure nihil maxime deserunt laboriosam eveniet impedit est veniam! Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="mt-6 ml-4 text-gray-700 text-base lg:text-lg">
                            <p>Tanggal</p>
                        </div>

                    </div>

                </div>
            </a>
        </div>


    </section>

</body>

</html>