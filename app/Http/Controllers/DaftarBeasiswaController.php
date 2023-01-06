<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrar;
use Alert;

class DaftarBeasiswaController extends Controller
{
    public function create(){
        return view('daftarBeasiswa.formDaftar',        
    );
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'tipe' => 'required',
            'emailPribadi'=> 'required',
            'hp'=> 'required',
            'live'=> 'required',
        ]);
        // return $request->all();

        // Get the file from the request
        $file1 = $request->hasFile('ktm');
        $file_name = "";
        if($file1){
            $newFile = $request->file('ktm');
            $file_name .= $newFile->store('registrar');
        }

        $file2 = $request->hasFile('ktp');
        $file_name = "";
        if($file2){
            $newFile = $request->file('ktp');
            $file_name .= $newFile->store('registrar');
        }

        $file3 = $request->hasFile('kks');
        $file_name = "";
        if($file3){
            $newFile = $request->file('kks');
            $file_name .= $newFile->store('registrar');
        }

        $file4 = $request->hasFile('sptmb');
        $file_name = "";
        if($file4){
            $newFile = $request->file('sptmb');
            $file_name .= $newFile->store('registrar');
        }

        $file5 = $request->hasFile('other');
        $file_name = "";
        if($file5){
            $newFile = $request->file('other');
            $file_name .= $newFile->store('registrar');
        }

            Registrar::insert([
                'id_daftar'=>rand(1000,10000),
                'emailMhs'=>$request->email,
                'nama'=>$request->nama,
                'nim'=>$request->nim,
                'prodi'=>$request->prodi,
                'tipeBeasiswa'=>$request->tipe,
                'emailPribadi'=>$request->emailPribadi,
                'noHp'=>$request->hp,
                'tanggalLahir'=>$request->tgl,
                'ipk'=>$request->ipk,
                'tempatTinggal'=>$request->live,
                'ktm'=>$file1,
                'ktp'=>$file2,
                'transkrip'=>$file3,
                'suratPernyataan'=>$file4,
                'lainnya'=>$file5,
                'created_at'=> now()
            ]);
    
        Alert::success('Sukses', 'Anda Berhasil Mendaftar.');
        // return view('daftarBeasiswa.dataPendaftar');
    }

    public function show(){
        $registrars = Registrar::all();
        return view('seleksibeasiswa.seleksi', compact('registrars'));

    }
}
