@extends('layouts.app_admin')
@section('title','Sigenting | Posting Informasi')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Post</h2>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div>
                        <div>
                            <div class="table-responsive-md">
                                <a href="{{ route('post.create') }}" class="btn btn-primary">Buat Post</a>
                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th class="th-md">No.</th>
                                            <th class="th-md">Judul</th>
                                            <th class="th-md">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($posts as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>
                                                
                                                <a href="{{route('post.edit', $item->slug )}}" class="btn btn-warning btn-sm">Edit</a>
                                                <a class="btn btn-danger btn-sm" onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();">Delete</a>

                                                <form id="delete-form-{{ $item->id }}" action="{{ route('post.delete', $item->id) }}" method="post" display="none">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection