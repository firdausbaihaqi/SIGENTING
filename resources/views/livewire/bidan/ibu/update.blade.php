<!-- Modal -->

<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

            <div class="modal-body">

                <form>

                    <div class="form-group">

                        <input type="hidden" wire:model="id_ibu">

                        <label for="exampleFormControlInput1">Nama</label>

                        <input type="text" class="form-control" wire:model="nama" id="exampleFormControlInput1" placeholder="Masukan Nama">

                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                    <div class="form-group">

                        <label for="exampleFormControlInput1">Alamat</label>

                        <input type="text" class="form-control" wire:model="alamat" id="exampleFormControlInput2" placeholder="Masukan Alamat">

                        @error('alamat') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                    <div class="form-group">

                        <label for="exampleFormControlInput2">Nomor Hp</label>

                        <input type="text" class="form-control" wire:model="no_hp" id="exampleFormControlInput3" placeholder="Masukan Nomor HP">

                        @error('no_hp') <span class="text-danger">{{ $message }}</span>@enderror

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>

                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>

            </div>

        </div>

    </div>

</div>