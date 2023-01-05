<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Provider\RouteServiceProvider;

class LoginController extends Controller
{

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
        // $res = $json['result'];
        if($json['result'] == true){

            $token = $json['token'];

            // $request->session()->put('user', $json['data']);
            $id_user = $json['user']['user_id'];
            $username = $json['user']['username'];
            $email = $json['user']['email'];
            $role = $json['user']['role'];
            $remember_token = $json['token'];

            // Cek apakah data user terdapat di database
            $exist = User::where('user_id', $id_user)->exists();
            $users = new User;
            $users->user_id = $id_user;
            $users->username = $username;
            $users->email = $email;
            $users->role = $role;
            $users->remember_token = $remember_token;

            if(!$exist){
                $users->save();
            }

            $dt = User::where('user_id', $id_user)->first();
            Auth::login($dt, $remember_token);
            
            $request->session()->put('username', $users->username);
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->withErrors(['login' => 'Username atau Password Salah']);
        }
    }

}
