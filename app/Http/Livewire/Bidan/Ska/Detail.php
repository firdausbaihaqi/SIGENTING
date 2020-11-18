<?php

namespace App\Http\Livewire\Bidan\Ska;

use App\Models\Anak;
use App\Models\StatusKesehatanAnak;
use Illuminate\Http\Request as HttpRequest;
use Livewire\Component;


class Detail extends Component
{

    public function render()
    {
        return view('livewire.bidan.ska.detail');
    }
}
