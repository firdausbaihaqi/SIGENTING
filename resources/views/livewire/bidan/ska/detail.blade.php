@extends('layouts.app_admin');
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Data Status Kesehatan Anak</h2>
                </div>
                <div class="card-body">
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
                                    <th class="th-md">Berat Badan</th>
                                    <th class="th-md">Tinggi Badan</th>
                                    <th class="th-md">Lingkar Kepala</th>
                                    <th class="th-md">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($ska as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->created_at->translatedFormat('d F Y') }}</td>
                                    <td>{{ $item->berat_badan }}</td>
                                    <td>{{ $item->tinggi_badan }}</td>
                                    <td>{{ $item->lingkar_kepala }}</td>
                                    <td>
                                        <a href="{{route('ska.detail' , $item->id)}}"
                                            class="btn btn-warning btn-sm">Edit</a>
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