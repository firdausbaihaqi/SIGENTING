<?php

namespace App\Http\Livewire\Bidan\Anak;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Anak;
use App\Models\Ibu;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $id_ibu, $nama, $jenis_kelamin, $tgl_lahir;
    protected $rules = [
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'tgl_lahir' => 'required',

    ];

    public function render()
    {
        $jk = ['Laki-Laki', 'Perempuan'];
        $anak = Anak::paginate(2);
        $ibu = Ibu::get();
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
        $this->resetInput();
        $this->emit('userStore');
    }

    public function resetInput()
    {
        $this->id_ibu = '';
        $this->nama = '';
        $this->jenis_kelamin = '';
        $this->tgl_lahir = '';
    }
}
