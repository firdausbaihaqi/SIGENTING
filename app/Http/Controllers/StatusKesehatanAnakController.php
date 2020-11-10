<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\StatusKesehatanAnak;

class StatusKesehatanAnakController extends Controller
{
    public function index()
    {
        $anak = Anak::get();
        $ska = StatusKesehatanAnak::get();
        $ska->anak();
        $anak->status_kesehatan_anak();
        return view('ska.index', compact('ska'));
    }
}
