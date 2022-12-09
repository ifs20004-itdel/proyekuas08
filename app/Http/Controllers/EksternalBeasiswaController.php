<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsorship;
use App\Models\BeasiswaEksternal;

class EksternalBeasiswaController extends Controller
{
    public function index(){
        $sponsorship = Sponsorship::all();
        $eksternalBeasiswa = BeasiswaEksternal::all();
        return view('jenisbeasiswa.eksternal',
        compact ('sponsorship', 'eksternalBeasiswa')
    );
    }
}
