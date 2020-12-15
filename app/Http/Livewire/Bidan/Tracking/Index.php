<?php

namespace App\Http\Livewire\Bidan\Tracking;

use App\Models\Anak;
use App\Models\Tracking;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    public $id_anak, $nama, $jenis_kelamin, $tgl_lahir;

    public function render()
    {
        // $anak = Anak::query()
        //     ->when($this->search, function ($query) {
        //         return $query->where('nama', 'like', '%' . $this->search . '%');
        //     })
        //     ->latest()->paginate(10);

        // $anak = Tracking::with('anak')
        //         ->when($this->search, function($query){
        //             return $query->whereHas('nama', 'like', '%' . $this->search . '%');
        //         })->latest()->paginate();

            $anak = Anak::select('*')
                ->join('tracking','anak.id','=','tracking.id_anak')
                ->where('nama', 'like', '%' . $this->search . '%')
                ->orderBy('tracking.created_at','DESC')->paginate();

        

        return view('livewire.bidan.tracking.index',compact('anak'));        
    }
}
