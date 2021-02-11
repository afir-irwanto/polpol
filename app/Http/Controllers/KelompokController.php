<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index()
    {
        return view('mahasiswa.pengajuan');
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}
