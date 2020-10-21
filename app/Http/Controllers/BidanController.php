<?php

namespace App\Http\Controllers;

use App\Models\Bidan;
use Illuminate\Http\Request;

class BidanController extends Controller
{
    public function index()
    {
        $bidan = Bidan::get();
        dd($bidan);
    }
}
