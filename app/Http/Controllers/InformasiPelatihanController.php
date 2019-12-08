<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiPelatihanController extends Controller
{
    public function informasipelatihan()
    {
        return view('informasipelatihan');
    }
}
