<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $req){

        // $password = $req->input('password');
        // $hashedPassword = Hash::make($password);

        // $user->password = $hashedPassword;
        // $user->save();

        $data = [
            'email' => $req->email,
            'password' => $req->password
        ];
        if(Auth::attempt($data)){
            return redirect('/dashboard');
        }

        return redirect('/login');
    }
}
