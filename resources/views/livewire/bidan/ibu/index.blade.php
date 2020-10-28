<div>
    <div>
        @include('livewire.bidan.ibu.create')
        @include('livewire.bidan.ibu.update')
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
                    <th>Name</th>
                    <th>Username</th>
                    <th>HP</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($ibu as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>
                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $item->id }})"
                            class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $ibu->links() }}
    </div>
</div>