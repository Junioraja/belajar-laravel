<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        return view ('mahasiswa_tambah');
    }
    public function store (Request $request){
        $request->validate([
            'nama'=>'required',
            'nim'=>'required|unique:mahasiswa,nim'
        ]);

        Mahasiswa::create($request->all());
        return back()->with('pesan', 'Data Berhasil Disimpan');
    }
}
