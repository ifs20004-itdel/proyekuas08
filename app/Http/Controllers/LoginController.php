<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function render(){
    //     return view('login');
    // }

    public function create(){
        return view('login');
    }

    public function store(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // $request = Http::asForm()->post('https://cis-dev.del.ac.id/api/jwt-api/do-auth',[
        //     'username' => request('username'),
        //     'password' => request('password')
        // ]);
        return redirect()->route('login');
    }

}
