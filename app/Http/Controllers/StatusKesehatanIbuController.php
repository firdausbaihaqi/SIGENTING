<?php

namespace App\Http\Controllers;

use App\Models\StatusKesehatanIbu;
use Illuminate\Http\Request;

class StatusKesehatanIbuController extends Controller
{
    public function show($id)
    {
        $ski = StatusKesehatanIbu::with('ibu')->where('id_ibu', $id)->get();
        // dd($ski);
        return view('livewire.bidan.ski.detail', compact('ski', 'id'));
    }

    public function create($id)
    {
        $ski = StatusKesehatanIbu::with('ibu')->where('id_ibu', $id)->get();
        return view('livewire.bidan.ski.create', compact('ski', 'id'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'riwayat_penyakit' => 'required',
        ]);

        StatusKesehatanIbu::create([
            'id_ibu' => $request->id_ibu,
            'riwayat_penyakit' => $request->riwayat_penyakit,
        ]);
        return redirect()->route('ski.detail', $request->id_ibu)->with(['success' => 'Data Status Kesehatan Ibu Berhasil Disimpan']);
    }

    public function edit($id, $skiId)
    {
        $ski = StatusKesehatanIbu::findOrFail($skiId);
        return view('livewire.bidan.ski.edit', compact('id', 'ski', 'skiId'));
    }

    public function update(Request $request, StatusKesehatanIbu $ski)
    {
        $data = $this->validate($request, [
            'riwayat_penyakit' => 'required',
        ]);

        StatusKesehatanIbu::where('id_ibu', $request->id_ibu)->limit(1)->update($data);
        return redirect()->route('ski.detail', $request->id_ibu)->with(['success' => 'Data Status Kesehatan Anak Berhasil Diubah']);
    }
}
