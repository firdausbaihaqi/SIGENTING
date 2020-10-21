<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingController extends Controller
{
    public function index()
    {
        // folder.namaFile
        return view("testing.login");
    }
}
