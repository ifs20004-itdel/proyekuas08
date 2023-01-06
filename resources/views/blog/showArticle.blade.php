@php
  $tags = $post->tags;
@endphp
@extends('layouts.app')
@section('title',$tags)
@section('background', 'bg-slate-700')
@section('content')
<div class="w-3/4 mx-auto">
  <h1 class="text-center font-bold font-sans my-10 text-4xl">{{$post->title}}</h1>
  <div class="my-10 w-3/4 mx-auto">
    @php
      echo "$post->description"
    @endphp
  </div>
</div>
@endsection

