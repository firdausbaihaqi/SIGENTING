<!-- Modal -->
<div wire:ignore.self class="modal-parent fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-32" role="document">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Anak Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div wire:ignore class="form-groups">
                        <label for="nama_ibu">Nama Ibu</label><br>
                        <select name="" class="js-example-basic-single js-states form-control" wire:model="id_ibu">
                            <option></option>
                            @foreach($ibu as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach()
                        </select>
                        @error('id_ibu') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-groups">
                        <label class="label" for="exampleFormControlInput1">Nama Anak</label>
                        <input type="text" class="input-text" id="exampleFormControlInput1" placeholder="Masukan nama anak" wire:model="nama">
                        @error('nama') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-groups">
                        <label class="label" for="exampleFormControlInput1">Jenis Kelamin</label>
                        <!-- <select type="text" class="form-control" wire:model="jenis_kelamin">
                            <option value="" disabled selected>Select your option</option>
                            @foreach ($jk as $gender)
                            <option value="{{ $gender }}" selected>{{ $gender }}</option>
                            @endforeach
                        </select> -->
                        <div class="text-gray-700">
                            @foreach ($jk as $gender)
                            <input type="radio" name="jenisKelamin" wire:model="jenis_kelamin" id="{{ $gender }}" value="{{ $gender }}">
                            <label for="{{ $gender }}" class="mr-3">{{ $gender }}</label>
                            @endforeach
                        </div>
                        @error('jenis_kelamin') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-groups">
                        <label class="label" for="exampleFormControlInput2">Tanggal Lahir</label>
                        <input type="date" class="input-text focus:border-blue-500" id="exampleFormControlInput3" wire:model="tgl_lahir">
                        @error('tgl_lahir') <span class="text-danger error">{{ $message }}</span>@enderror
                        <br>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="button-cancel close-btn" data-dismiss="modal">Batal</button>
                <button type="button" wire:click.prevent="store()" class="button-submit close-modal">Tambahkan</button>
            </div>
        </div>
    </div>
</div>