<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class RegisterController extends Controller
{
    public function postregister(Request $req){
        // $data = [
        //     'email' => $req->email,
        //     'password' => $req->password,
        //     'password2' => $req->password2
        // ];
        // if(Auth::attempt($data)){
        //     return redirect('/dashboard');
        // }
        // return redirect('/register');
        
        User::create([
            'nama_user' => $req->nama_user,
            'email' => $req->email,
            'password' => $req->password

        ]);

        return redirect('/dashboard');

    }
}
