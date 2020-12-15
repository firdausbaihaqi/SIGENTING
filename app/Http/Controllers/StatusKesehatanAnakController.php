<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\StatusKesehatanAnak;
use App\Models\Tracking;
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
        return view('livewire.bidan.ska.detail', compact('ska', 'id'));
    }

    public function create($id)
    {
        $ska = StatusKesehatanAnak::with('anak')->where('id_anak', $id)->get();
        return view('livewire.bidan.ska.create', compact('ska', 'id'));
    }

    public function store(Request $request)
    {
        $status_stunting = $request->status_stunting;
        $berat = $request->berat_badan;
        $tinggi = $request->tinggi_badan;
        $lingkar_kepala = $request->lingkar_kepala;
        // $status_stunting = $this->isStunting($berat, $tinggi, $lingkar_kepala);

        $this->validate($request, [
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'lingkar_kepala' => 'required|numeric'
        ]);

        StatusKesehatanAnak::create([
            'id_anak' => $request->id_anak,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'lingkar_kepala' => $request->lingkar_kepala,
        ]);
        $this->createOrUpdateTracking($request->id_anak, $status_stunting);
        return redirect()->route('ska.detail', $request->id_anak)->with(['success' => 'Data Status Kesehatan Anak Berhasil Disimpan']);
    }

    public function edit($id, $skaId)
    {
        $ska = StatusKesehatanAnak::findOrFail($skaId);
        return view('livewire.bidan.ska.edit', compact('id', 'ska', 'skaId'));
    }

    public function update(Request $request, StatusKesehatanAnak $ska)
    {
        $data = $this->validate($request, [
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'lingkar_kepala' => 'required|numeric'
        ]);
        StatusKesehatanAnak::where('id_anak', $request->id_anak)->limit(1)->update($data);
        return redirect()->route('ska.detail', $request->id_anak)->with(['success' => 'Data Status Kesehatan Anak Berhasil Diubah']);
    }

    // public function isStunting($berat, $tinggi, $lingkar_kepala)
    // {
    //     $status_stunting = '';
    //     if ($berat < 10 || $tinggi < 25 || $lingkar_kepala < 6) {
    //         return $status_stunting = 'YA';
    //     } else {
    //         return $status_stunting = 'TIDAK';
    //     }
    // }

    public function createOrUpdateTracking($id, $status_stunting)
    {
        $id_anak = Tracking::where('id_anak', $id)->exists();
        if ($id_anak) {
            Tracking::where('id_anak', $id)
                ->limit(1)->update(['status_stunting' => $status_stunting]);
        } else {
            Tracking::create([
                'id_anak' => $id,
                'status_stunting' => $status_stunting
            ]);
        }
    }
}
