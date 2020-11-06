<!-- Modal -->
<div wire:ignore.self class="modal-parent fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog mt-32" role="document">

        <div class="modal-content">

            <div class="modal-header text-white">

                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

            <div class="modal-body">

                <form>

                    <div class="form-groups">

                        <input type="hidden" wire:model="id_ibu">

                        <label for="exampleFormControlInput1" class="label">Nama</label>

                        <input type="text" class="input-text" wire:model="nama" id="exampleFormControlInput1" placeholder="Masukan Nama">

                        @error('nama') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                    <div class="form-groups">

                        <label for="exampleFormControlInput1" class="label">Alamat</label>

                        <input type="text" class="input-text" wire:model="alamat" id="exampleFormControlInput2" placeholder="Masukan Alamat">

                        @error('alamat') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                    <div class="form-groups">

                        <label for="exampleFormControlInput2" class="label">Nomor Hp</label>

                        <input type="text" class="input-text" wire:model="no_hp" id="exampleFormControlInput3" placeholder="Masukan Nomor HP">

                        @error('no_hp') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button type="button" wire:click.prevent="cancel()" class="button-cancel" data-dismiss="modal">Batal</button>

                <button type="button" wire:click.prevent="update()" class="button-submit">Simpan Perubahan</button>

            </div>

        </div>

    </div>

</div>