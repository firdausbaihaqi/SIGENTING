{{-- {{ dd($post[0]) }} --}}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="bg-gray-100 mx-32">
    <section class="mt-12">

        <h1 class=" text-4xl text-left">Artikel seputar gizi</h1>
        <p>tips-tips dan informasi seputar gizi balita </p>
        <div class="mobile-blocker md:hidden">Hanya boleh dibuka lewat pc atau layar tablet :(</div>

        <div class="headline-container">
            <!-- bagian kiri -->
            @foreach ($post as $index => $item)
            @if ($index == 0)
            <a href="#" class="col-span-3 posts-container" style="height: 50vh;">
                <div class="posts-bg" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
                background-size: cover;">
                    <div class="overlay-gray"></div>
                </div>
                <div class="posts-info text-xl lg:text-2xl text-white">
                    <p>{{ $item->judul }}</p>
                    <p>Posted:{{ $item->created_at->translatedFormat('d F Y') }}</p>
                </div>
            </a>
            @endif
            @endforeach

            <!-- akhir bagian kiri -->
            <!-- bagian kanan -->
            <div class="col-span-4 grid grid-cols-2 gap-1">
                @foreach ($post as $index => $item)
                    @if ($index > 0 && $index < 5) 
                        <a href="#" class="posts-container">
                            <div class="posts-bg"
                                style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover;">
                                <div class="overlay-gray"></div>
                            </div>
                            <div class="posts-info-secondary text-sm lg:text-lg text-white">
                                <p>{{ $item->judul }}</p>
                                <p>Posted:{{ $item->created_at->translatedFormat('d F Y') }}</p>
                                <p class="kontent" id="kontent_{{$item->id}}" style="display: none;">{{ $item->isi }}</p>
                            </div>
                        </a>
                        @endif
                @endforeach
                    <!-- akhir bagian kanan -->
            </div>
        </div>

    </section>
    <section class="my-12">
        <div class="pt-2 block text-gray-600">
            <input class="input-search-lg text-sm focus:outline-none " type="search" name="search"
                placeholder="Pencarian">
            <!-- svg search -->
            <button type="submit" class="absolute mt-4 -ml-8">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
            <!-- svg search -->

        </div>
        <div class="w-3/4 grid">
        @foreach ($post as $index => $item)
            @if($index < 5)
                <a href="#" class="posts-card-link">
                    <div class="posts-card-container">
                        <div class="posts-card-img" style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);background-size: cover;">
                            <div class="overlay-gray"></div>
                        </div>
                        <div class="posts-card-info">
                            <div class="ml-4 mt-2 text-xl lg:text-3xl text-black">
                                <p>{{ $item->judul }}</p>
                            </div>
                            <div class="h-24 ml-4 text-sm lg:text-base text-gray-700 overflow-hidden mr-12">
                                <p>
                                    {!! $item->isi !!}
                                </p>
                            </div>
                            <div class="mt-6 ml-4 text-gray-700 text-base lg:text-lg">
                                <p>Posted:{{ $item->created_at->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </section>
</body>

<script>
    // // let api=document.querySelectorAll('.posts-bg').style.backgroundImage;
    // let konten = document.querySelector('p.kontent > p > img');
    // // let p = konten.querySelectorAll('p')
    // // let api = document.getElementsByClassName('posts-bg'.style.backgroundImage);
    // console.log(konten.src);
    // // for (var i = 0; i < imageFromKonten.length; i++) {
    // //     // x[i].style.backgroundColor = "red";
    // //     console.log(imageFromKonten[i]);
    // // } 
    
</script>
<script>
$(document).ready(function(){
  let ap = $('.kontent > p > img').attr('src');
  console.log(ap);
});
</script>
</html>