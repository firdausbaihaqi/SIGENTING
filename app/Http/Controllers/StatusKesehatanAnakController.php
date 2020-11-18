<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\StatusKesehatanAnak;
use Carbon\Carbon;

class StatusKesehatanAnakController extends Controller
{
    public function index()
    {
        $date = Carbon::now('Asia/Jakarta');
        $anak = Anak::get();
        $ska = StatusKesehatanAnak::with('anak')->get();
        // $ska = StatusKesehatanAnak::get()->anak();
        return view('ska.index', compact('ska', 'anak', 'date'));
    }

    public function show($id)
    {
        $ska = StatusKesehatanAnak::with('anak')->where('id_anak', $id)->get();
        return view('livewire.bidan.ska.detail', compact('ska'));
    }

    public function create()
    {
    }
}
