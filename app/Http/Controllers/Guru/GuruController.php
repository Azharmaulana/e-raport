<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    //validate inputs
    function create(Request $request)
    {   
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'kelas'=>'required',
            'password'=>'required|min:5|max:33',
        ]);

        $guru = new Guru();
        $guru->name = $request->name;
        $guru->email = $request->email;
        $guru->kelas = $request->kelas;
        $guru->password = Hash::make($request->password);
        $save = $guru->save();

        if( $save ){
            return redirect()->back()->with('success', 'Registrasi berhasil!');
        }else{
            return redirect()->with('fail','Registrasi gagal!');
        }
    }

    function check(Request $request)
    {
        //invalidate inputs
        $request->validate([
            'email'=>'required|email|exists:gurus,email',
            'password' => 'required|min:5|max:33',
        ]);
    }
}
