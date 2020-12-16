@extends('layouts.app_ibu')
{{-- {{ dd($artikel) }} --}}
@section('title' ,'Sigenting | Selamat Datang Di Halaman Ibu')
@section('content')
<div class="container">
    <section class="mt-12 w-full m-5">
        <div class="headline-container" style="height: 50vh; background: url(https://st3.depositphotos.com/3227011/15104/i/1600/depositphotos_151040356-stock-photo-top-view-laptop-document-office.jpg);
        background-size:cover;">
        </div>
        <h1 class="mt-6 text-4xl text-left">{{$artikel[0]->judul}}</h1>
        <p class="text-lg text-gray-700">Tanggal Upload: {{ $artikel[0]->created_at->translatedFormat('d F Y') }}</p>
    </section>
    <section class="mt-6 mb-12 shadow-lg" style="width: fit-content;">
        <div class="w-full md:w-3/4 grid bg-white rounded-lg ">
            <!-- post container -->
            <div class="m-5 text-gray-700">
                <p>
                    &nbsp; {!! $artikel[0]->isi !!}
                    <br>
                </p>
            </div>
            <!-- post container -->
        </div>


    </section>
</div>

@endsection

@section('custom-scripts')
<script>
    document.body.style.backgroundColor = "white";
</script>

@endsection