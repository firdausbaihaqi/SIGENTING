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
                        <th class="th-md">Alamat</th>
                        <th class="th-md">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ibu as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="{{route('ski.detail' , $item->id)}}" class="btn btn-primary btn-sm">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $ibu->links() }}
    </div>
</div>