@extends('layouts.app')
@section('title','Beasiswa Internal')
@section('background', 'bg-slate-700')
@section('content')
<div class="container w-3/4 m-auto px-10">
    <h1 class="text-center font-bold text-5xl p-10">Beasiswa Internal</h1>

    <div class="flex flex-col space-y-3">
        <h2 class="font-bold text-3xl pl-28 pb-3">Beasiswa Prestasi</h2>  
        <p class="pl-28">Beasiswa prestasi diberikan kepada mahasiswa dalam bentuk potongan SPP dengan aturan sebagai berikut:</p>
        <ol class="list-decimal pl-6 space-y-1 pb-20 w-3/4 m-auto">
            
            <li>Beasiswa prestasi persemester diberikan bagi semua mahasiswa pada tingkat 1, tingkat 2, tingkat 3, dan tingkat 4
                kecuali mahasiswa pada semester terakhir masa studinya (semester 6 pada prodi DIII dan semester 8 pada prodi DIV dan S1.)
            </li>
            <li class="pb-5">
                Besar potongan SPP untuk penerima beasiswa prestasi per semester dapat dilihat pada tabel 1.

            </li>
            <p class="text-center pb-8">Tabel 1 Potongan SPP untuk penerima beasiswa prestasi tiap semester</p>
            <div class="pb-8">
                <table class="table-auto border m-auto pb-4">
                    <thead class="border bg-green-300">
                        <tr>
                          <th  class="border px-5 py-3">NR Persemester</th>
                          <th  class="border px-5">Potongan SPP (Presentase dari uang SPP per Semester)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td  class="border px-5 py-2">4.00</td>
                          <td  class="border px-5">100%</td>
                        </tr>
                        <tr>
                          <td  class="border px-5 py-2">3.75-3.99</td>
                          <td  class="border px-5">50%</td>
                        </tr>
                        <tr>
                          <td  class="border px-5 py-2">3.50-3.74</td>
                          <td  class="border px-5">25%</td>
                        </tr>
                      </tbody>
                </table>
            </div>

                <li>Mahasiswa penerima Beasiswa Prestasi harus memiliki perilaku terpuji dan dibuktikan dengan nilai
                    perilaku minimal AB.
                </li>
                <li>Kuota untuk mahasiswa penerima beasiswa prestasi persemester adalah sebanyak 20
                    (dua puluh) orang per angkatan dan maksimal 5(lima) orang untuk setiap program studi, sehingga
                    mahasiswa calon penerima beasiswa prestasi akan diranking berdasarkan nilai rata-rata, namun jika ditemukan kasus mahasiswa
                    dengan nilai rata-rata yang sama, sehinga melewati kuota 20 (dua puluh) orang maka akan diranking berdasarkan nilai indeks prestasi sementara, 
                    namun jika nilai indeks prestasi masih sama selanjutnya akan dipilih berdasarkan nilai perilaku.
                </li>
                <li>
                    Bagi mahasiswa yang sedang menerima beasiswa dari Yayasan Del maupun pihak lain tidak dapat menerima beasiswa prestasi.
                </li>
            </ol>
            
           
        {{-- <ol class="list-decimal pl-6 space-y-1">
            
        </ol> --}}
    </div>
</div>
@endsection
