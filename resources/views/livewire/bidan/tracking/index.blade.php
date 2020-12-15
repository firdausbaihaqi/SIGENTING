<div>
    <div>        
        <!-- <input type="text" class="form-control mt-2" placeholder="Search" wire:model="search" /> -->
        <div class="pt-2 block text-gray-600">
            <input wire:model="search" class="input-search text-sm focus:outline-none " type="search" name="search" placeholder="Pencarian">
            <!-- svg search -->
            <button type="submit" class="absolute mt-3 -ml-8">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
            <!-- svg search -->
            
        </div>
        @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">
            {{ session('message') }}
        </div>
        @endif
        <div class="mobile-blocker md:hidden">Hanya boleh dibuka lewat pc atau layar tablet :(</div>
        <div class="table-responsive-md">
            <table class="table table-bordered mt-5">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th class="table-header w-1/12">No.</th>
                        <th class="table-header">Nama</th>
                        <!-- kurang nama ibu -->
                        <th class="table-header">Jenis Kelamin</th>
                        <th class="table-header">Status Stunting</th>
                        <th class="table-header">Tanggal Pemeriksaan</th>                        
                    </tr>
                </thead>

                <tbody>

                    @foreach($anak as $item)
                    <tr class="hover:bg-gray-100">
                        <td class="table-data">{{ $item->id }}</td>
                        <td class="table-data">{{ $item->nama }}</td>
                        <td class="table-data">{{ $item->jenis_kelamin }}</td>
                        <td class="table-data">{{ $item->status_stunting }}</td>
                        <td class="table-data">{{ $item->created_at->translatedFormat('d F Y') }}</td> 
                        
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

        $('.searchFormUpdate').select2({
            dropdownParent: $("#updateModal"),
            placeholder: 'Select an option'
        });

    });
</script>

@endpush