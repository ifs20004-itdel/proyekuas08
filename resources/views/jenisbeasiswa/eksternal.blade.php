@extends('layouts.app')
@section('title','Seleksi')
@section('background', 'bg-slate-700')
@section('content')
{{-- @include('layouts.navbar') --}}
<div class="container w-3/4 m-auto px-10">
    <h1 class="text-center font-bold text-5xl pt-10 pb-24">Beasiswa Eksternal</h1>
    <div>
        @php
            $id = 1;
        @endphp
        @foreach($sponsorship as $item)
        <div>
            <h1 class="text-3xl font-bold pb-5 ">{{$id}}. {{$item->title}}</h1>
            <img class="px-16" src="https://lh4.googleusercontent.com/chAttRoW6s9PIeiC0YUKhlS_Ab0vfAXJSC8fNVHe71tB0pPDuON7PdVD_Pi_zPCeqAU=w2400" alt="beasiswa1">
            <p class="px-10 py-5">
                {{$item->description}}
            </p>
            <hr class="my-10"
            @php
                $id++;
            @endphp
        </div>
        @endforeach
    </div>
</div>
@endsection
