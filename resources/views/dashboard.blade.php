@extends('layouts.app')
@section('title','Dashboard')
@section('background', 'bg-slate-800')
@section('background-opc','bg-opacity-50')
@section('content')

@csrf
<div style="height:1600px">
    <img src="{{asset('assets/DashboardBg.jpg')}}" alt="theme" class=" object-cover absolute z-0" style=" top:0; width:100%; height:80vh" >
    <div class="absolute z-10 top-40 pl-12">
      <h1 class="text-6xl text-white drop-shadow-lg pt-5 -z-0"> <b>Create</b> Best Future, <br> </h1>
      <h1 class="text-6xl text-white drop-shadow-lg pt-5 -z-0"><b>Create</b> Your Own Dream</h1>
      <h5 class="text-2xl text-white drop-shadow-lg pt-5 font-mono -z-0">Selamat Datang ke Web Portal Beasiswa Institut Teknologi Del!</h5>
    </div>
    <div class="absolute z-10 pl-5 flex mx-20 p-5 rounded-md" style="margin-top: 550px">
      <div class="w-full bg-gray-100 py-5 px-10 rounded-md">
        <h1 class="font-bold tracking-wider text-3xl mb-2">BERITA TERBARU</h1>
        @include('blog.postArtikel')
      </div>
      <div class="border w-3/4">
        <h1 class="font-bold tracking-wider text-3xl ml-3 my-2">PENGUMUMAN</h1>
        @include('blog.postPengumuman')
      </div>
    </div>
    <div class="absolute z-10 pl-5  mx-20 p-5 rounded-md" style="margin-top: 1150px ">
      <h1 class="px-10 my-4 text-3xl font-bold ">Program yang Tersedia</h1>
      @include('daftarBeasiswa.beasiswaCard')
    </div>
</div>
@endsection
