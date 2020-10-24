<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class BidanController extends Controller
{
    public function index()
    {
        return view('dashboard.bidan.index');
    }

    public function showDataIbu()
    {
        $ibu = Ibu::orderBy('id', 'desc')->paginate(15);
        return view('dashboard.bidan.data_ibu', compact('ibu'));
    }

    public function destroyDataIbu(Ibu $ibu)
    {
        $ibu->delete();
    }

    public function storeDataIbu()
    {

        $attr = request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        Ibu::create($attr);

        return redirect()->back();
    }
}
