<div class="flex items-center md:order-2 pr-10 list-none ">
  <li class="bg-sky-600 px-4 py-1 hover:bg-sky-800 shadow-lg text-white rounded-md" >
    <a href="/login/auth">Log In</a>
  </li>
</div>
<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
  <ul class="flex flex-col  mt-4 border md:flex-row md:space-x-12 md:mt-0 md:text-sm md:font-medium md:border-0 ">
    <li>
      <a href="/" class="block py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 tracking-wider" aria-current="page">Beranda</a>
    </li>
    <li>
      <button id="dropdownDataBeasiswa" data-dropdown-toggle="dropdownD" class="z-20 py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 inline-flex items-center tracking-wider" type="button">Data Beasiswa <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      
      <div id="dropdownD" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
        <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownDataBeasiswa">
          <li>
            <a href="{{route('dataBeasiswa',2019)}}" name = 'tahun' value='2019' class="block py-2 px-4 hover:bg-gray-100 ">2019</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2020)}}" class="block py-2 px-4 hover:bg-gray-100 ">2020</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2021)}}" class="block py-2 px-4 hover:bg-gray-100 ">2021</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2022)}}" class="block py-2 px-4 hover:bg-gray-100 ">2022</a>
          </li>
          <li>
            <a href="{{route('dataBeasiswa',2023)}}" class="block py-2 px-4 hover:bg-gray-100 ">2023</a>
          </li>
        </ul>
      </div>
    </li>
    <li>
      <button id="dropdownJenisBeasiswa" data-dropdown-toggle="dropdownJ" class="z-20 py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 inline-flex items-center tracking-wider" type="button">Jenis Beasiswa <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      <div id="dropdownJ" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow">
          <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownJenisBeasiswa">
            <li>
              <a href="/beasiswaInternal" class="block py-2 px-4 hover:bg-gray-100 ">Beasiswa Internal</a>
            </li>
            <li>
              <a href="{{route('beasiswaEksternal')}}" class="block py-2 px-4 hover:bg-gray-100 ">Beasiswa Eksternal</a>
            </li>
          </ul>
      </div>
    </li>
    <li>
      <a href="/seleksi" class="block py-2 pl-3 pr-4 text-yellow-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-400 md:p-0 tracking-wider">Seleksi</a>
    </li>
  </ul>
</div>