@extends('layouts.app_admin')
@section('title','Sigenting | Data Kesehatan Anak')

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
                    <form action="{{ route('ska.store', $id) }}" method="post">
                        @csrf
                        <input type="hidden" name="id_anak" class="form-control" value="{{$id}}">
                        <div class="form-group">
                            <label for="">Berat Badan (Kg)</label>
                            <input type="text" name="berat_badan" class="form-control">
                            @error('berat_badan') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tinggi Badan (Cm)</label>
                            <input type="text" name="tinggi_badan" class="form-control">
                            @error('tinggi_badan') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="">Lingkar Kepala (Cm)</label>
                            <input type="text" name="lingkar_kepala" class="form-control">
                            @error('lingkar_kepala') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection