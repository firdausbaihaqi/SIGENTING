
<!-- Modal -->
<div wire:ignore.self class="modal-parent fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-32" role="document">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Ibu Baru</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-groups">
                        <label for="exampleFormControlInput1" class="label">Nama</label>
                        <input type="text" class="input-text" id="exampleFormControlInput1" placeholder="Masukan Nama" wire:model="nama">
                        @error('nama') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>                    
                    <div class="form-groups">
                        <label for="exampleFormControlInput1" class="label">Alamat</label>
                        <input type="text" class="input-text" id="exampleFormControlInput2" placeholder="Masukan Alamat" wire:model="alamat">
                        @error('alamat') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-groups">
                        <label for="exampleFormControlInput2" class="label">Nomor HP</label>
                        <input type="text" class="input-text" id="exampleFormControlInput3" wire:model="no_hp" placeholder="Masukan Nomor HP">
                        @error('no_hp') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer mt-2">
                <button type="button" class="button-cancel close-btn" data-dismiss="modal">Batal</button>
                <button type="button" wire:click.prevent="store()" class="button-submit close-modal">Tambahkan</button>
            </div>
        </div>
    </div>
</div>