@extends('layouts.app')
@section('title','Dashboard')
@section('background', 'bg-slate-800')
@section('background-opc','bg-opacity-50')
@section('content')

@csrf
<div style="height:1500px">
    <img src="{{asset('assets/DashboardBg.jpg')}}" alt="theme" class=" object-cover absolute z-0" style=" top:0; width:100%; height:80vh" >
    <div class="absolute z-10 top-40 pl-12">
      <h1 class="text-6xl text-white drop-shadow-lg pt-5 -z-0"> <b>Create</b> Best Future, <b>Create</b> Your Own Dream</h1>
    </div>
    {{-- <p>Halo</p> --}}
    
    <div class="absolute z-10 pl-5 flex mx-20 p-5 rounded-md" style="margin-top: 550px">
      <div class="w-full bg-gray-100 py-5 px-10 rounded-md">
        <h1 class="font-bold tracking-wider text-3xl">BERITA</h1>
        {{session()->get('username')}}
        <!-- component -->
        @include('artikelBerita.postArtikel')
      </div>
      <div class="border w-3/4">
        <h1 class="font-bold tracking-wider text-3xl">PENGUMUMAN</h1>
      </div>
    </div>
</div>
@endsection
