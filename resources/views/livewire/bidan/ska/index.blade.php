<div>
    <div>
        <input type="text" class="form-control mt-2" placeholder="Search" wire:model="search" />
        @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
            {{ session('message') }}
        </div>
        @endif
        <div class="table-responsive-md">
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th class="th-md">No.</th>
                        <th class="th-md">Nama</th>
                        <th class="th-md">Jenis Kelamin</th>
                        <th class="th-md">Tanggal Lahir</th>
                        <th class="th-md">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($anak as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>
                        <td>{{ $item->tgl_lahir }}</td>
                        <td>
                            <a href="{{route('ska.detail' , $item->id)}}" class="btn btn-primary btn-sm">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $anak->links() }}
    </div>
</div>