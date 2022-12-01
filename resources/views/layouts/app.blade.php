<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{url(asset('assets/logo.png'))}}">
  <title>@yield('title') | Beasiswa</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  @include('layouts.navbar')
  @yield('content')
  @include('layouts.footer')
</body>
</html>

