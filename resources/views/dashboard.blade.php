<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  @include('layouts.navbar')
  <img src="{{asset('assets/DashboardBg.jpg')}}" alt="theme" class=" object-cover absolute z-0" style=" top:0; width:100%; height:80vh" >
  <div class="absolute z-10 top-40 pl-12">
    <h1 class="text-6xl text-white drop-shadow-lg pt-5 -z-0"> <b>Create</b> Best Future, <b>Create</b> Your Own Dream</h1>
    <div class="d-flex">
      <img src="" alt=""><img src="" alt="">
    </div>
  </div>
  
</body>
</html>

