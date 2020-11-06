<?php

namespace App\Http\Livewire\Bidan\Anak;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Anak;
use App\Models\Ibu;

class Index extends Component
{

    use WithPagination;
    public $search = '';
    public $updatedMode = false;
    protected $paginationTheme = 'bootstrap';
    public $id_anak, $id_ibu, $nama, $jenis_kelamin, $tgl_lahir;
    protected $rules = [
        'id_ibu' => 'required',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'tgl_lahir' => 'required',

    ];


    public function render()
    {
        $jk = ['Laki-Laki', 'Perempuan'];
        $ibu = Ibu::get();
        $anak = Anak::query()
            ->when($this->search, function ($query) {
                return $query->where('nama', 'like', '%' . $this->search . '%');
            })
            ->latest()->paginate(10);

        return view('livewire.bidan.anak.index', compact('anak', 'ibu', 'jk'));
    }

    public function store()
    {
        $this->validate();
        Anak::create([
            'id_ibu' => $this->id_ibu,
            'nama' => $this->nama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tgl_lahir' => $this->tgl_lahir,
        ]);
        session()->flash('message', 'Users Added Successfully.');
        $this->resetInput();
        $this->emit('userStore');
    }

    public function resetInput()
    {
        $this->id_ibu = '';
        $this->id_anak = '';
        $this->nama = '';
        $this->jenis_kelamin = '';
        $this->tgl_lahir = '';
    }

    public function edit($id)
    {
        $this->updatedMode = true;
        $anak = Anak::where('id',  $id)->first();
        $this->id_anak = $id;
        $this->id_ibu = $anak->id_ibu;
        $this->nama = $anak->nama;
        $this->jenis_kelamin = $anak->jenis_kelamin;
        $this->tgl_lahir = $anak->tgl_lahir;
    }

    public function update()
    {
        $data = $this->validate();
        $anak = Anak::find($this->id_anak);
        $anak->update($data);
        session()->flash('message', 'Users Updated Successfully.');
        $this->updatedMode = false;
        $this->resetInput();
        $this->emit('userUpdate');
    }

    public function delete($id)
    {
        if ($id) {

            Anak::where('id', $id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
