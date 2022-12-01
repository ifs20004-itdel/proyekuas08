@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div style="height:1500px">
    <img src="{{asset('assets/DashboardBg.jpg')}}" alt="theme" class=" object-cover absolute z-0" style=" top:0; width:100%; height:80vh" >
    <div class="absolute z-10 top-40 pl-12">
      <h1 class="text-6xl text-white drop-shadow-lg pt-5 -z-0"> <b>Create</b> Best Future, <b>Create</b> Your Own Dream</h1>
    </div>
    <div class="absolute z-10 pl-12 flex border mx-20 p-5 rounded-md" style="margin-top: 550px">
      <div class="w-full">
        <h1 class="font-bold tracking-wider text-3xl">BERITA</h1>
        <div class="flex pr-5">
          <div class="font-bold border w-1/2 p-3">
            <hr class="border-2 bg-black">
            <div class="grid grid-cols-1 divide-y">
              <div>
                <h6>Peresmian Program Beasiswa Sarjana Sea dan Penandatanganan Perjanjian Kerjasama antara Perguruan Tinggi yang Menjadi Mitra Garena</h6>
              </div>
              <div><img src="" alt="post1"></div>
              <div><a href="">Baca Selengkapnya</a></div>
            </div>
            <div>
            </div>
            
          </div>
          <div class="font-bold border w-1/2 p-3">
            <hr class="border-2 bg-black">
            <div class="grid grid-cols-1 divide-y">
              <div>
                <h6>Peluncuran Beasiswa Sea Indonesia 2021 di UI, ITB, IPB, UGM, Binus, dan IT DEl</h6>
              </div>
              <div>
                <img src="" alt="post2">
              </div>
              <div>
                <a href="">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border w-3/4">
        <h1 class="font-bold tracking-wider text-3xl">PENGUMUMAN</h1>
      </div>
    </div>
    
</div>

@endsection
