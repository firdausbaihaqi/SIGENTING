
@extends('layouts.app_ibu')

@section('title' ,'Sigenting | Selamat Datang Di Halaman Ibu')

@section('content')
<header class="flex justify-between items-center w-full mt-12 md:mt-32 mx-5 md:mx-16 mb-32 flex-wrap ">

    <div class="w-3/4 md:w-2/6">
        <h1 class="text-2xl text-white md:text-black md:text-4xl font-medium">
            Selamat Datang
            <br>
            Ibu <span class="font-semibold"> {{ ucfirst($auth->nama) }} </span>
        </h1>

    </div>

    <img class="fixed right-0 mt-16 md:mt-8 transform md:scale-125 -mr-24 md:mr-0" style="z-index: -1;"
        src="{{ asset('img/landing.svg') }}">

</header>
<section class="w-screen mt-20 pb-20  md:hidden bg-white rounded-tr-3xl rounded-tl-3xl">
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

        <div class="mt-8 mx-2">
            @foreach ($anak as $item)
            @if ($item->id_anak != null)
            <div
                class="w-full bg-blue-100 my-4 py-4 px-3 border-l-8 {{ $item->status_stunting == 'TIDAK' ? 'border-blue-500' : 'border-red-500' }} rounded-l-lg">
                <h4 class="font-semibold text-lg mb-2"> {{ ucfirst($item->nama) }} </h4>
                <p class="text-gray-600">
                    bulan ini dalam keadaan
                    <b>
                        @if ($item->status_stunting == 'YA')
                        Stunting
                        @else
                        Tidak Stunting
                        @endif
                    </b> dengan keterangan sebagai
                    berikut : <br>
                    
                </p>
            </div>
            @else
            <div class="w-full bg-red-300 my-4 py-4 px-3 border-l-8 border-red-500 rounded-l-lg">
                <h4 class="font-semibold text-lg mb-2"> {{ $item->nama }} </h4>
                <p class="text-gray-600">
                    Belum Pernah Melakukan Pemeriksaan di Puskesmas, Silakan Periksakan Anak Anda Ke Puskesmas
                </p>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection