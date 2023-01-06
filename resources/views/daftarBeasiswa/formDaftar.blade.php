@extends('layouts.app')
@section('title', 'Daftar Beasiswa')
@section('background', 'bg-slate-700')
@section('content')
    <form action="{{route('store-daftar-beasiswa')}}" method="POST">
        @csrf
        <div class="w-2/4 border mx-auto my-24">
            <h1 class="text-center font-bold font-sans my-10 text-4xl">Form Pendaftaran</h1>
            <div class="my-10 w-3/4 mx-auto">
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="email">Email Mahasiswa</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="email" name="email" type="email">
                    @error('email')
                        <div class="text-red-600  pl-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="nama">Nama Mahasiswa (sesuai data di CIS)</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="nama" name="nama" type="text">
                    @error('nama')
                        <div class="text-red-600  pl-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="nim">Nomor Induk Mahasiswa</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="nim" name="nim" type="text">
                    @error('nim')
                        <div class="text-red-600  pl-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="prodi">Prodi</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="prodi" name="prodi" type="text">
                    @error('prodi')
                        <div class="text-red-600  pl-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="tipe">Jenis Beasiswa</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="tipe" name="tipe" type="text">
                    @error('tipe')
                        <div class="text-red-600  pl-2">{{ $message }}</
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="emailPribadi">Alamat Email Pribadi</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="emailPribadi" name="emailPribadi" type="email">
                    @error('emailPribadi')
                        <div class="text-red-600  pl-2">{{ $message }}</
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="hp">No Handphone</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="hp" name="hp" type="text">
                    @error('hp')
                        <div class="text-red-600  pl-2">{{ $message }}</
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="tgl">Tanggal Lahir</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="tgl" name="tgl" type="date">

                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="ipk">IPK</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="ipk" name="ipk" type="text">
                    <p class=" px-1 py-1 text-sm">format: 3.04</p>
                    @error('ipk')
                        <div class="text-red-600  pl-2">{{ $message }}</
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="live">Alamat Tempat Tinggal</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="live" name="live" type="text">
                    @error('live')
                        <div class="text-red-600  pl-2">{{ $message }}</
                    @enderror
                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="ktm">Softcopy KTM</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="ktm" name="ktm" type="file">

                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="ktp">Softcopy KTP</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="ktp" name="ktp" type="file">

                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="kks">Softcopy Kartu Hasil Studi</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="kks" name="kks" type="file">
                </div>
                <div class="mb-10">
                    <label class="text-lg p-1 tracking-wide" for="sptmb">Softcopy Surat Pernyataan Tidak Menerima Beasiswa Lain + Materai 10000</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="sptmb" name="sptmb" type="file">

                </div>
                <div class="mb-10">
                    <label class="text-xl p-1 tracking-wide" for="other">Dokumen Lainnya</label>
                    <input class="block w-full px-4 py-3 text-gray-700 border border-gray-300 bg-gray-200 rounded leading-tight focus:outline-none focus:bg-white hover:shadow-md" id="other" name="other" type="file">

                </div>
                <button class="bg-blue-500 mx-1 px-5 py-2 text-white font-semibold rounded" type="submit">Daftar</button>
            </div>
        </div>
    </form>
@endsection