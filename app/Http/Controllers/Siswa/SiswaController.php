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
            'email.exists'=> 'Email ini tidak terdaftar!'
        ]);

        $creds = $request->only('email','password');
        if (Auth::attempt($creds) ) {
            return redirect()->route('user.home');
        }else{
            return redirect()->route('siswa.login')->with('fail','Incorrect credintials');
        }
    }
}
