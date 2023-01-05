@extends('layouts.app')
@section('title','Beasiswa Eksternal')
@section('background', 'bg-slate-700')
@section('content')
{{-- @include('layouts.navbar') --}}
    <h1 class="text-center font-bold text-5xl pt-10 pb-16">Beasiswa Eksternal</h1>
    {{-- <div class="container w-3/4 m-auto px-10"> --}}
        @php
            // Auth::user()->id;
            $id = 1;
            // split the description and store it in an array
            foreach($sponsorship as $item){
                $list = explode(";", $item->description);
                $item->description = $list;
            }
            
        @endphp
        @foreach($sponsorship as $item)
            <div class="container w-3/4 m-auto px-10">
                <h1 class="text-3xl font-bold pb-5 ">{{$id}}. {{$item->title}}</h1>
                @if(
                    $item->image == "-"
                )
                @else
                    <img class="px-16" src="{{$item->image}}" alt="beasiswa">
                @endif
                <p class="px-10 py-3">
                    @foreach($item->description as $desc)
                        <p class="py-1 indent-8 px-10">{{$desc}}</p>
                    @endforeach
                </p>
                <hr class="my-5">
            </div>
            @php
                $id++;
            @endphp
        @endforeach
    <h1 class="w-3/4 m-auto font-bold text-3xl pb-10 px-10">Beasiswa yang Tersedia</h1>
    @if($eksternalBeasiswa->isEmpty())
            <h1 class="text-center font-bold text-1xl border w-1/4 mx-auto mb-10 py-2 rounded-xl bg-red-600 text-white">
                <x-carbon-warning height="50px" color="white" class="w-1/4 m-auto mb-2" />
                Tidak ada pendaftaran beasiswa yang tersedia untuk saat ini!
            </h1>
    @else
        @foreach($eksternalBeasiswa as $key => $value)
        <div class="w-3/4 m-auto font-bold text-2xl pb-10">
            <div class="max-w-sm rounded overflow-hidden shadow-lg pt-5">
                <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                  <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                  <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
              </div>
        </div>
        @endforeach
    @endif
@endsection
