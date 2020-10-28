<?php

namespace App\Http\Livewire\Bidan\Ibu;

use App\Models\Ibu;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama, $alamat, $no_hp, $id_ibu;
    public $updateMode = false;
    public  $search = '';


    public function render()
    {
        $keyword = '%' . $this->search . '%';
        return view('livewire.bidan.ibu.index', [
            'ibu' => Ibu::where('nama', 'like', $keyword)
                ->orderBy('id', 'desc')->paginate(10)
        ]);
    }

    public function resetInput()
    {
        $this->nama = '';
        $this->alamat = '';
        $this->no_hp = '';
    }

    public function store()
    {
        $validateData = $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',

        ]);
        Ibu::create($validateData);
        session()->flash('message', 'Data Ibu Berhasil Ditambahkan');
        $this->resetInput();
        $this->emit('userStore');
    }

    public function edit($id)
    {

        $this->updateMode = true;
        $ibu = Ibu::where('id', $id)->first();

        $this->id_ibu = $id;
        $this->nama = $ibu->nama;
        $this->alamat = $ibu->alamat;
        $this->no_hp = $ibu->no_hp;
    }

    public function update()
    {
        $validateData = $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',

        ]);

        if ($this->id_ibu) {

            $ibu = Ibu::find($this->id_ibu);
            $ibu->update([
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Data Ibu Berhasil di Update');
            $this->resetInput();
        }
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInput();
    }

    public function delete($id)
    {
        if ($id) {
            Ibu::where('id', $id)->delete();
        }
        session()->flash('message', 'Data Ibu Berhasil dihapus');
    }
}
