<?php

namespace App\Http\Livewire\Bidan\Ski;

use App\Models\Ibu;
use App\Models\StatusKesehatanIbu;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    public $id_ibu, $nama, $jenis_kelamin, $tgl_lahir;

    public function render()
    {
        $ibu = Ibu::query()->when($this->search, function ($query) {
            return $query->where('nama', 'like', '%' . $this->search . '%')
                ->orWhere('alamat', 'like', '%' . $this->search . '%');
        })->latest()->paginate(10);

        return view('livewire.bidan.ski.index', compact('ibu'));
    }
}
