@extends('layouts.app_ibu')
{{-- {{ dd($artikel) }} --}}
@section('title' ,'Sigenting | Selamat Datang Di Halaman Ibu')
@section('content')

<body class="bg-gray-100 mx-32 md:mx-32">
    <h1 class="mt-12 text-4xl text-left">Artikel seputar gizi</h1>
    <p>tips-tips dan informasi seputar gizi balita </p>
    <section class="hidden md:inline">
        <div class="headline-container">
            <!-- bagian kiri -->
            <!-- akhir bagian kiri -->
            <!-- bagian kanan -->
            <div class="col-span-4 grid grid-cols-2 gap-1">
                @foreach ($artikel as $item)
                <a href="" class="posts-container">
                    <div class="posts-bg"
                        style="background: url(https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>
                    <div class="posts-info-secondary text-sm lg:text-lg text-white">
                        <p>{{$item->judul}}</p>
                        <p>{{$item->created_at}}</p>
                    </div>
                </a>
                @endforeach
                <!-- akhir bagian kanan -->
            </div>
        </div>

    </section>

    <section class="my-12 shadow-md">

        <!-- <div class="block md:hidden pt-2 text-gray-600">
            <input class="input-search-full text-sm focus:outline-none " type="search" name="search" placeholder="Pencarian">
            <button type="submit" class="absolute mt-6 -ml-8">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </div> -->
        <!-- <div class="hidden md:block pt-2 text-gray-600">
            <input class="input-search-lg text-sm focus:outline-none " type="search" name="search" placeholder="Pencarian">
            <button type="submit" class="absolute mt-4 -ml-8">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
            
        </div> -->
        <div class="w-3/4 grid">
            @foreach ($artikel as $item)
            <a href="{{route('ibu.artikel.detail', $item->slug)}}" class="posts-card-link">
                <div class="posts-card-container">

                    <div class="posts-card-img" style="background: url({{asset('/image/'.$item->image)}});
                background-size: cover;">
                        <div class="overlay-gray"></div>
                    </div>

                    <div class="posts-card-info">
                        <div class="title lg:text-3xl">
                            <p> {{ $item->judul }} </p>
                        </div>
                        <div class="detail lg:text-base">
                            <p> {!! Str::limit($item->isi,10) !!}
                            </p>
                        </div>
                        <div class="tanggal lg:text-lg">
                            <p>Di Posting: {{ $item->created_at->translatedFormat('d F Y') }}</p>
                        </div>

                    </div>

                </div>
            </a>
            @endforeach
        </div>


    </section>

</body>
@endsection