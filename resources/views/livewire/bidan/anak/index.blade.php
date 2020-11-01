<div>
    <div>
        @include('livewire.bidan.anak.create')
        @include('livewire.bidan.anak.update')
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
                            <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $item->id }})"
                                class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $anak->links() }}
    </div>
</div>


@push('scriptTest')
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            dropdownParent: $("#exampleModal"),
            placeholder: 'Select an option'
        });


        $(document).on('change', '.js-example-basic-single', function(e) {
            @this.set('id_ibu', e.target.value);
        });

        $(document).on('click', '#tambahAnak', function(e) {
            e.preventDefault();
            @this.set('id_ibu', null);
            $('.js-example-basic-single').select2({
                placeholder: 'Select an option'
            });
        });

    });

    // document.addEventListener("livewire:load", function(event) {
    //     window.livewire.hook('afterDomUpdate', () => {
    //         $('.js-example-basic-single').select2({
    //             placeholder: 'Select an option',
    //         });
    //     });
    // });
</script>

@endpush