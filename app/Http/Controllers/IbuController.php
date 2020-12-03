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

    public function data_anak($id)
    {
        $auth = auth()->guard()->user();
        $anak = Anak::find($id);

        if ($auth->id == $anak->id_ibu) {            
            return view('ibu.data_anak', compact('auth','anak'));
        }else{
            return abort(404);
        }
    }

    
}
