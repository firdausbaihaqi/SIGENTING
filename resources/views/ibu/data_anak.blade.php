@extends('layouts.app_ibu')
{{-- {{ dd($anak) }} --}}
@section('title' ,'Sigenting | Selamat Datang Di Halaman Ibu')

@section('content')
<header class="flex justify-between items-center w-full mt-12 md:mt-32 mx-5 md:mx-16 mb-32 flex-wrap ">

    <div class="w-3/4 md:w-2/6">
        <h1 class="text-2xl text-white md:text-black md:text-4xl font-medium">
            Data Kesehatan
            <br>
            Bayi
        </h1>

    </div>

    <img class="fixed right-0 mt-16 md:mt-8 transform md:scale-125 -mr-24 md:mr-0" style="z-index: -1;"
        src="{{ asset('img/landing.svg') }}">

</header>

<section class="w-screen h-screen overflow-scroll mt-20 pb-20  md:hidden bg-gray-100 rounded-tr-3xl rounded-tl-3xl">
    <div class="mx-8 pt-8">
        <div class="pt-2 block text-gray-600">
            <input class="input-search-full text-sm focus:outline-none " type="search" name="search"
                placeholder="Pencarian">
            <!-- svg search -->
            <button type="submit" class="absolute mt-6 -ml-8">
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

        <div class="mt-4 mx-1">
            @foreach ($anak as $item)
            <div class="bg-white w-full rounded-2xl shadow-lg p-6 mt-4">
                <div class="flex flex-col">
                    <div>
                        <span class="text-xl font-semibold"> {{ $item->nama }} </span>
                        &nbsp; icon gender
                    </div>
                    <div class="text-sm text-gray-600">Umur : 2 bulan </div>
                </div>

                <!-- container data -->
                <div class="flex justify-around">
                    <div class="mt-4 flex flex-col items-center">
                        <div>icon bb</div>
                        <div class="text-red-500">
                            <b class="text-3xl">{{ $item->berat_badan }}</b>
                            KG</div>
                        <div class="text-sm text-gray-600">Berat badan</div>
                        <div class="text-sm {{ ($item->berat_badan < 15) ? 'text-red-500' : ($item->berat_badan >= 15 && $item->berat_badan <= 25 ? 'text-blue-500' : 'text-red-500')}}">
                            @if ($item->berat_badan < 15)
                            Kekurangan
                            @elseif ($item->berat_badan >= 15 && $item->berat_badan <= 25) 
                            Normal
                            @else
                            Kelebihan BB
                            @endif
                        </div>
                    </div>

                    <div class="mt-4 flex flex-col items-center">
                        <div>icon tb</div>
                        <div class="text-blue-400">
                            <b class="text-3xl">{{$item->tinggi_badan}}</b>
                            CM</div>
                        <div class="text-sm text-gray-600">Tinggi badan</div>
                        <div class="{{ ($item->tinggi_badan < 15) ? 'text-red-500' : ($item->tinggi_badan >= 15 && $item->tinggi_badan <= 25 ? 'text-blue-500' : 'text-red-500')}}">
                        @if ($item->tinggi_badan < 18)
                            Kurang Tinggi
                            @elseif ($item->tinggi_badan >= 18 && $item->tinggi_badan <= 25) 
                            Ideal
                            @else
                            Terlalu tinggi
                            @endif
                        </div>
                    </div>
                </div>
                <!-- container data -->

            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection