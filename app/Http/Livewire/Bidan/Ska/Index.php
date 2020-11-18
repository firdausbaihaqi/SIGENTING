<?php

namespace App\Http\Livewire\Bidan\Ska;

use Livewire\Component;
use App\Models\Anak;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    public $id_anak, $nama, $jenis_kelamin, $tgl_lahir;

    public function render()
    {
        $anak = Anak::query()
            ->when($this->search, function ($query) {
                return $query->where('nama', 'like', '%' . $this->search . '%');
            })
            ->latest()->paginate(10);
        return view('livewire.bidan.ska.index', compact('anak'));
    }
}
