{{-- {{ dd($anak) }} --}}
<div>
    <div>
        @include('livewire.bidan.anak.create')
        {{-- @include('livewire.bidan.ibu.update') --}}
        <input type="text" class="form-control mt-2" placeholder="Search" wire:model="search" />
        @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
            {{ session('message') }}
        </div>
        @endif
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
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
                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $item->id }})"
                            class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $anak->links() }}
    </div>
</div>