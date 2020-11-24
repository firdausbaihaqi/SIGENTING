@extends('layouts.app_admin')
@section('title','Sigenting | Data Kesehatan Ibu')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-4">
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{ route('ski.store', $id) }}" method="post">
                        @csrf
                        <input type="hidden" name="id_ibu" class="form-control" value="{{$id}}">
                        <div class="form-group">
                            <label for="">Riwayat Penyakit</label>
                            <input type="text" name="riwayat_penyakit" class="form-control">
                            @error('riwayat_penyakit') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection