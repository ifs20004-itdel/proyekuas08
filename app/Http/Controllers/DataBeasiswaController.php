<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBeasiswa;

class DataBeasiswaController extends Controller
{
    public function index($tahun){
        // $year = $request->get('tahun');
        $year = $tahun;
        $dataBeasiswa = DataBeasiswa::where('tahunTerima','=', $year)->get();
        return view('databeasiswa.dataBeasiswa',
        [
            'year' => $year,
            'data'=> $dataBeasiswa
        ]);
    }

    public function store(Request $request){
        DataBeasiswa::create([
            'nama' => $request->get('nama'),
            'nim' => $request->get('nim'),
            'prodi' => $request->get('prodi'),
            'angkatan'=> $request->get('angkatan'),
            'beasiswa'=> $request->get('beasiswa'),
            'tahun'=> $request->get('tahun'),
            'status'=> $request->get('status'),
            'tahunTerima'=> $request->get('tahunTerima'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return view('databeasiswa.createData');
    }
}
