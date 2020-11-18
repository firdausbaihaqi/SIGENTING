<?php

namespace App\Http\Controllers;

use App\Models\StatusKesehatanAnak;
use Illuminate\Http\Request;

class StatusKesehatanIbuController extends Controller
{
    public function show($id)
    {
        $ska = StatusKesehatanAnak::where('id_anak', $id)->get();
        return view('livewire.bidan.ska.detail', compact('ska'));
    }
}
