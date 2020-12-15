@extends('layouts.app_ibu')
{{-- {{ dd($artikel) }} --}}
@section('title' ,'Sigenting | Selamat Datang Di Halaman Ibu')
@section('content')
@foreach ($artikel as $item)
<ul>
    <li>
        {{ $item->judul }}
    </li>
</ul>
@endforeach
@endsection