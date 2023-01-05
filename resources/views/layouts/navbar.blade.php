@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<nav class="@yield('background') @yield("background-opc") px-10 py-1 z-20 sticky top-0" style="width:100%" >
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">
          <img src="{{asset('assets/logo.png')}}" width="90" height="200" alt="Beasiswa Logo" />
          <span class="self-center pl-5 font-semibold whitespace-nowrap text-white">BEASISWA <br> INSTITUT TEKNOLOGI DEL</span>
      </a>
      @guest
        @include('components.logIn')
      @else
        @include('components.loggedIn')
      @endguest
    </div>
  </nav>
  