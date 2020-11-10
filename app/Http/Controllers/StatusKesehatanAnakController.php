<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusKesehatanAnakController extends Controller
{
    public function index()
    {
        return view('ska.index');
    }
}
