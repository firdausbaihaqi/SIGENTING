@extends('layouts.app_admin')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@section('title','Dashboard Bidan')

@section('content')
<h1 class="d-flex justify-content-center">Data Ibu</h1>
<button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#exampleModal2">
    Tambah
</button>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>HP</th>
        <th>Action</th>
    </tr>

    @foreach ($ibu as $index => $item)
    <tr>
        @for ($i = 0; $i < 1; $i++) <td>{{ $item->id }}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->no_hp}}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" id="btnEdit" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit">
                    Edit
                </button>
                <button type="button" id="btnDelete" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="{{ $item }}">
                    Hapus
                </button>
            </td>
            @endfor
    </tr>
    @endforeach

</table>
<div class=" mt-3 d-flex justify-content-center">
    {{ $ibu->links() }}
</div>

{{-- Add Modal --}}
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin menghapus?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addData') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="">No HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp">
                    </div>

                    <button class="btn btn-danger btn-sm mr-2" type="submit">Iya</button>
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Tidak</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>




<!-- Edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Menghapus?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="nama"></p>
                <p id="alamat"></p>
            </div>
            <div class="modal-footer">
                <button type="button" id="modalDeleteTidak" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="button" id="modalDeleteIya" class="btn btn-primary">Iya</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        //Delete 
        var dataIbu;
        $('body').on('click', '#btnDelete', function() {
            dataIbu = $(this).data('id')
            console.log(dataIbu['id']);
            $("#nama").val('Nama: ');
            $('#alamat').val('Alamat: ' + dataIbu['alamat']);

        })
        $('#modalDeleteIya').click(function(e) {
            e.preventDefault();
            var id = dataIbu['id']
            console.log(id);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            $.ajax({
                url: '/dashboard/bidan/data/ibu/' + id + '/delete',
                method: 'DELETE',
                success: function(result) {
                    console.log(result);
                    $('#deleteModal').modal('hide');
                    location.reload();
                },

            });
        });

    })
</script>
@endsection