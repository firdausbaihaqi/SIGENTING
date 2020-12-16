@extends('layouts.app_admin')

@section('title', 'Sigenting | Halaman Utama Admin')

@section('style')
@livewireStyles
<style>
    @media (max-width: 767.98px) {
        .btn {
            margin: 3px;
        }
    }
</style>
@endsection

@section('content')
<div class="center mt-56">
        
        <h1 class="m-8 text-2xl">Admin Panel</h1>
    

    <div class="card-adminPanel mt-4">
        <a href="{{route('data.ibu')}}" class="button-admin bg-blue-400 hover:bg-blue-500">
            Data Ibu
        </a>
        <a href="{{route('data.anak')}}"" class="button-admin bg-green-400 hover:bg-green-500">
            Data Bayi
        </a>
        <a href="{{route('post.index')}}" class="button-admin bg-orange-400 hover:bg-orange-500">
            Post
        </a>
    </div>
</div>
@endsection
