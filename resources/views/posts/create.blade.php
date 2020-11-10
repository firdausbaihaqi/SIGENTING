@section('title','Sigenting | Buat Post')
@extends('layouts.app_admin')
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

                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Isi</label>
                            <textarea name="isi" id="content"></textarea>
                        </div>
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    //HUBUNGKAN CKEDITOR DENGAN TEXTAREA YANG BERNAMA CONTENT
    //ADAPUN KONFIGURASI UPLOAD URLNYA MENGARAH KE ROUTE POST.IMAGE
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('post.image', ['_token' => csrf_token() ])}}",
        // filebrowserUploadMethod: 'form',
        filebrowserImageBrowseUrl: '/filemanager?type=Images',
        filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/filemanager?type=Files',
        // filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
    });
</script>
@endsection