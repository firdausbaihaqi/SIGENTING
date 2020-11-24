@extends('layouts.app_admin')
@section('title', 'Sigenting | Data Status Kesehatan Anak')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Data Status Kesehatan Anak</h2>
                    @foreach ($ski as $item)
                    @if ($item->ibu->nama)
                    <h2>Nama Ibu : {{ $item->ibu->nama }} </h2>
                    @break
                    @endif
                    @endforeach
                </div>
                <div class="card-body">
                    <a href="{{ route('ski.create', $id) }}" class="btn btn-primary">Tambah Data</a>
                    @if (session()->has('$message'))
                    <div class="alert alert-success">
                        {{ session('$message') }}
                    </div>
                    @endif
                    <div class="table-responsive-md">
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr>
                                    <th class="th-md">No.</th>
                                    <th class="th-md">Tanggal Pemeriksaan</th>
                                    <th class="th-md">Riwayat Penyakit</th>
                                    <th class="th-md">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($ski as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->created_at->translatedFormat('d F Y') }}</td>
                                    <td>{{ $item->riwayat_penyakit }}</td>
                                    <td>
                                        <a href="{{route('ski.edit', [$id , $item->id])}}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection