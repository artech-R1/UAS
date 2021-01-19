<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    function showRegister()
    {
        return view('register');
    }
    function showLogin()
    {
        return view('login');
    }
    function loginProcess()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
           $user = Auth::user();
           if($user->level == 1)   return  redirect('berandaAdmin')->with('success', 'Login sukses');
           if($user->level == 0)   return  redirect('berandaUser')->with('success', 'Login sukses');
        } else {
            return back()->with('danger', "Login Gagal cek Kembali");
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

   
    
    function register()
    {
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->jk = 1;
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();
        return redirect('login')->with('success', 'Registrasi Berhasil');
    }

    function forgotPassword()
    {
    }
}
