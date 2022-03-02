<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    function create(Request $request)
    {
        //validate inputs
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
        ]);

        $siswa = new User();
        $siswa->name = $request->name;
        $siswa->username = $request->username;
        $siswa->email = $request->email;
        $siswa->password = Hash::make($request->password);
        $save = $siswa->save();

        if( $save ){
            return redirect()->back()->with('success', 'Registrasi berhasil!');
        }else{
            return redirect()->with('fail','Registrasi gagal!');
        }
    }

    function check(Request $request)
    {
        //validate inputs
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=> 'Email tidak terdaftar!'
        ]);

        $creds = $request->only('email','password');
        if (Auth::guard('web')->attempt($creds) ) {
            return redirect()->route('siswa.home');
        }else{
            return redirect()->route('siswa.login')->with('fail','Ada yang salah !');
        }
    }

    function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
