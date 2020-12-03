<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\StatusKesehatanAnak;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function index()
    {
        $auth = auth()->guard()->user();
        // $anak = Anak::where('id_ibu', $auth->id)->get();
        $anak = Anak::select('*')
                ->leftJoin('tracking','anak.id','=','tracking.id_anak')
                ->where('anak.id_ibu' , $auth->id)->get();
        return view('ibu.index', compact('auth', 'anak'));
    }

    public function data_anak()
    {
        $auth = auth()->guard()->user();
        $anak = Anak::select('*')
        ->join('status_kesehatan_anak','anak.id','=','status_kesehatan_anak.id_anak')
        ->where('anak.id_ibu' , $auth->id)->get();;
        
        // if ($auth->id == $anak->id_ibu) {            
        // }else{
        //     return abort(404);
        // }
        return view('ibu.data_anak', compact('auth','anak'));
    }

    
}
