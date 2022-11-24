@vite('resources/css/app.css')
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<nav class="bg-slate-800 bg-opacity-50 px-10 py-1 absolute z-20" style="width:100%" >
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">
          <img src="{{asset('assets/logo.png')}}" width="90" height="200" alt="Beasiswa Logo" />
          <span class="self-center pl-5 font-semibold whitespace-nowrap text-white">BEASISWA <br> INSTITUT TEKNOLOGI DEL</span>
      </a>
      <div class="flex items-center md:order-2 pr-3">
          <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="notification" data-dropdown-placement="bottom">
            <x-monoicon-notification class="pr-4" color="white" width="35" />
          </button>
          <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <x-codicon-account color="white" width="30" />    
          </button>
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="notification">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 ">Notification</span>
            </div>
            <ul class="py-1" aria-labelledby="user-menu-button">
              <li>
                <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
              </li>
            </ul>
          </div>
          <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="user-dropdown">
            <div class="px-4 py-3">
              <span class="block text-sm text-gray-900 ">Bonnie Green</span>
              <span class="block text-sm font-medium text-gray-500 truncate ">name@flowbite.com</span>
            </div>
            <ul class="py-1" aria-labelledby="user-menu-button">
              <li>
                <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Settings</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
              </li>
            </ul>
          </div>
          <p class="pl-4 text-white">Samuel I. H. Sibuea</p>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col  mt-4 border md:flex-row md:space-x-12 md:mt-0 md:text-sm md:font-medium md:border-0 ">
          <li>
            <a href="/" class="block py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 " aria-current="page">Beranda</a>
          </li>
          <li>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="z-20 py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 inline-flex items-center" type="button">Data Beasiswa <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Earnings</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Sign out</a>
                  </li>
                </ul>
            </div>
          </li>
          <li>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="z-20 py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 inline-flex items-center" type="button">Jenis Beasiswa <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
                <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDefault">
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Earnings</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Sign out</a>
                  </li>
                </ul>
            </div>
          </li>
          <li>
            <a href="/seleksi" class="block py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 ">Seleksi</a>
          </li>
          <li>
            <a href="/about" class="block py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  