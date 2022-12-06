@extends('layouts.app')
@section('title', 'Data Beasiswa')
@section('background', 'bg-slate-700')
@section('content')
<div class="container border shadow-2xl rounded-3xl border-black w-3/4 my-16 mx-auto bg-zinc-100">
    <h1 class="text-white rounded-t-3xl shadow-md pt-5 pb-5 px-28 font-bold text-3xl bg-green-800">Tambah Data Mahasiswa</h1>
    @csrf
    <form class="mx-32 py-8">
        <div class="flex flex-wrap">
            <div class="mb-6 mr-20">
                <label for="nama" class="block pr-36 mb-2 text-md font-medium text-gray-900 dark:text-white">Nama Mahasiswa</label>
                <input autocomplete="off" type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ex: Michael Napitupulu" >
                @error('nama')
                    <div class="text-danger pl-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="nim" class="block pr-24 mb-2 text-md font-medium text-gray-900 dark:text-white">Nomor Induk Mahasiswa</label>
                <input  autocomplete="off" type="text" id="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ex: 11S20004" >
                @error('nim')
                    <div class="text-danger pl-2">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-6">
            <label for="prodi" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Program Studi</label>
            <select id="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled="disabled">Pilih Program Studi</option>
                <option value="TK">DIII Teknologi Komputer</option>
                <option value="TI">DIII Teknologi Informasi</option>
                <option value="TRPL">D4 Teknologi Rekayasa Perangkat Lunak</option>
                <option value="IF">S1 Informatika</option>
                <option value="SI">S1 Sistem Informasi</option>
                <option value="MR">S1 Manajemen Rekayasa</option>
                <option value="TE">S1 Teknik Elektro</option>
                <option value="TB">S1 Teknik Bioproses</option>
            </select>
        </div>
        <div class="grid grid-cols-2 gap-10">
            <div class="mb-6">
                <label for="beasiswa" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Beasiswa</label>
                <input type="text" id="beasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder= "ex: SEA Scholarship" >
            </div>
            <div class="mb-6">
                <label for="tahunTerima" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Tahun Penerimaan</label>
                <input type="text" id="tahunTerima" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder= "ex: 2020-2022 or 2022" >
            </div>
        </div>
        <div class="grid grid-cols-2 gap-10">
            <div class="mb-6">
                <label for="angkatan" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Angkatan</label>
                <input type="text" id="angkatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="ex: 2020" >
            </div>
            <div class="mb-6">
                <label for="status" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Status</label>
                <div class="flex items-center mb-4">
                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aktif</label>
                </div>
                <div class="flex items-center">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sudah Lulus</label>
                </div>
            </div>
        </div>

            <button type="submit" class="mb-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan Data</button>
    </form>
</div>
  
@endsection