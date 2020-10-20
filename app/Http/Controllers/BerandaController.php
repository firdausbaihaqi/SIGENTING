<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        echo "ini beranda";
    }

    public function about()
    {
        echo "ini about";
    }

    public function kontak()
    {
        echo "ini kontak";
    }
}
