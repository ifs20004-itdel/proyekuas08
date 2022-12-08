<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsorship;

class EksternalBeasiswaController extends Controller
{
    public function index(){
        $sponsorship = Sponsorship::all();
        return view('jenisbeasiswa.eksternal',
        compact('sponsorship')
    );
    }
}
