@extends('layouts.app_admin')

@section('title', 'Data Anak')

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
            <div class="card">
                <div class="card-header">
                    <h2>Data</h2>
                </div>
                <div class="card-body">
                    @if (session()->has('$message'))
                    <div class="alert alert-success">
                        {{ session('$message') }}
                    </div>
                    @endif
                    @livewire('bidan.anak.index')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@livewireScripts

<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#exampleModal').modal('hide');
    });

    window.livewire.on('userUpdate', () => {
        $('#updateModal').modal('hide');
    });
</script>

@endsection