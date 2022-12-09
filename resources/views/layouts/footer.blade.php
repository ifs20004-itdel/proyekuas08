
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<div class="grid grid-cols-3 gap-4 bg-slate-900 text-white p-10 w-full">
        <div>
            <h1 class="pb-5 text-lg font-bold tracking-wider">PETA LOKASI</h1>
            <div class="pb-5">
                <p class="text-sm">Jl. Sisingamangaraja,Sitoluama Laguboti, Toba, Sumatera Utara, Indonesia, 22381</p>
            </div>
            <p class="text-lg">IT DEL</p>
            <ul>
                <li class="text-sm">Kode Pos: 22381</li>
                <li class="text-sm">Telp: +62 632 331234</li>
                <li class="text-sm">Fax: +62 632 331116</li>
                <li class="text-sm">Website: http://www.del.ac.id</li>
                <li class="text-sm">Email: info@del.ac.id</li>
                <li class="text-sm">Karir: karir@del.ac.id</li>
            </ul>
        </div>
        <div>
            <h1 class="text-lg pb-5 font-bold tracking-wider">HUBUNGI KAMI</h1>
            <div class="pb-5">            
                <p>Senin-Jumat</p> 
                <p>08.00-17.00</p>
            </div>
            <div class="pb-5">            
                <p>Kemahasiswaan</p> 
                <p>kemahasiswaan@del.ac.id</p>
            </div>
            <div class="pb-5">            
                <p>BAAK</p> 
                <p>http://baak.fite.del.ac.id/</p>
                <p>http://baak.fti.del.ac.id/</p>
            </div>
        </div>
        <div class="grid grid-cols-3 p-5">
            <div class="row-span-1 ... pr-3">
                <img class="pb-1" src="{{url(asset('assets/kip.jpg'))}}" alt="kip_kuliah">
                <img class="pb-1" src="{{url(asset('assets/Tanoto.png'))}}" alt="tanoto">
                <img src="{{url(asset('assets/niaga.jpg'))}}" alt="cimb_niaga"> 
            </div>
            <div>
                <img class="pb-1" src="{{url(asset('assets/Sea.png'))}}" alt="sea">
                <img class="pb-1" src="{{url(asset('assets/bni.jpg'))}}" alt="bni">
                <img class="pb-1" src="{{url(asset('assets/mbkm.jpg'))}}" alt="kampusMerdeka">
            </div>
            <div >
                <img class="pb-1" src="{{url(asset('assets/Rajawali.png'))}}" alt="rajawali">
                <img class="pb-1" src="{{url(asset('assets/inalum.jpg'))}}" alt="inalum">
            </div>
        </div>
</div>  
<div class="bg-white w-full py-2">
    <p class="text-black text-center font-bold">Copyright @Kelompok 8</p>
</div>