<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        // dd($request->username());
        $user = Http::asForm()->post('https://cis.del.ac.id/api/jwt-api/do-auth?',[
            'username' => $request->username,
            'password' => $request->password
        ]);

        $json = json_decode($user->body(), true);
        if($json['result'] == true){
            // $request->session()->put('user', $json['data']);
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('error', 'Username atau Password salah');
        }

    }

}
