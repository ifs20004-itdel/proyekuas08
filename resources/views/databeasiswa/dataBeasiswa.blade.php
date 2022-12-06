@extends('layouts.app')
@section('title', 'Data Beasiswa')
@section('background', 'bg-slate-700')
@section('content')
    @csrf
    @php
        $id = 1;
    @endphp
    <h1 class="text-center text-4xl font-bold py-10">Data Penerima Beasiswa Tahun {{$year}}</h1>
        @if($data->isEmpty())
            <h1 class="text-center font-bold text-1xl h-48">Tidak ada data yang dapat ditampilkan!</h1>
        @else
        <table class="border-collapse border border-slate-400 mx-auto my-10">
            <tr class="bg-green-400">
                <th class="px-7 border border-slate-400">No</th>
                <th class="px-28 border border-slate-400">Nama</th>
                <th class="px-10 border border-slate-400">NIM</th>
                <th class="px-10 border border-slate-400">Program Studi</th>
                <th class="px-5 border border-slate-400">Angkatan</th>
                <th class="px-10 border border-slate-400">Beasiswa</th>
                <th class="px-5 border border-slate-400">Tahun Penerimaan</th>
                <th class="px-10">Status</th>
            </tr>
            @foreach($data as $item)
                <tr class="border text-center">
                    <td class="border border-slate-400">{{$id}}</td>
                    <td class="border border-slate-400">{{$item->nama}}</td>
                    <td class="border border-slate-400">{{$item->nim}}</td>
                    <td class="border border-slate-400">{{$item->prodi}}</td>
                    <td class="border border-slate-400">{{$item->angkatan}}</td>
                    <td class="border border-slate-400">{{$item->beasiswa}}</td>
                    <td class="border border-slate-400">{{$item->tahun}}</td>
                    <td class="border border-slate-400">{{$item->status}}</td>
                </tr>
                @php
                    $id++;
                @endphp
            @endforeach
        </table>
        @endif
@endsection