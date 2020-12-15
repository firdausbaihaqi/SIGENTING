@extends('layouts.app_admin')

@section('title', 'Data Laporan')

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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="container">
            <div>
                <div class="title text-gray-700 mb-8">
                    <h2>Data Anak</h2>
                </div>
                <div class="card-body">
                    @if (session()->has('$message'))
                    <div class="alert alert-success">
                        {{ session('$message') }}
                    </div>
                    @endif
                    @livewire('bidan.tracking.index')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@livewireScripts

<!-- <script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#exampleModal').modal('hide');
    });

    window.livewire.on('userUpdate', () => {
        $('#updateModal').modal('hide');
    }); -->
</script>

@endsection