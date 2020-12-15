<?php

namespace App\Http\Livewire\Bidan\Laporan;

use App\Models\Laporan;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $laporan = Laporan::select(['ibu.nama as nama_ibu','anak.nama as nama_anak','anak.jenis_kelamin','anak.tgl_lahir','status_kesehatan_anak.berat_badan','status_kesehatan_anak.tinggi_badan','status_kesehatan_anak.lingkar_kepala','status_kesehatan_ibu.riwayat_penyakit'])
                    ->join('ibu','laporan.id_ibu','=','ibu.id')
                    ->join('anak','laporan.id_anak','=','anak.id')
                    ->join('status_kesehatan_anak','laporan.id_status_kesehatan_anak','=','status_kesehatan_anak.id')
                    ->join('status_kesehatan_ibu','laporan.id_status_kesehatan_ibu','=','status_kesehatan_ibu.id')
                    ->get();
        return view('livewire.bidan.laporan.index',compact('laporan'));
    }
     
}
