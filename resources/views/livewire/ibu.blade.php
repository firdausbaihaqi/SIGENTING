@extends('layouts.app_admin')

@section('title', 'Data Tracking')

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
<body class="bg-gray-100">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="container">
                <div>
                    <div class="title text-gray-700 mb-8">
                        <h2>Data Ibu</h2>
                    </div>
                    <div>
                        @if (session()->has('$message'))
                        <div class="alert alert-success">
                            {{ session('$message') }}
                        </div>
                        @endif
                        @livewire('bidan.ibu.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
        window.livewire.on('userUpdate', () => {
            $('#updateModal').modal('hide');
        });
    </script>