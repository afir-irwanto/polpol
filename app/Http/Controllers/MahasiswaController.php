<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.pengajuan');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $request->validate([
            'mahasiswa.*.nim_mhs' => 'required',
            'mahasiswa.*.nama_mhs' => 'required',
            'mahasiswa.*.prodi_mhs' => 'required',
        ]);
        foreach ($request->mahasiswa as $key => $value) {
            Mahasiswa::create($value);
        }
        return back()->with('success', 'Data berhasil diajukan! Harap tunggu notifikasi selanjutnya!');
    }
}