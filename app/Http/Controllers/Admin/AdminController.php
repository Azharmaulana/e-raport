<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{   
    function check(Request $request)
    {
        //validate inputs
        $request->validate([
         'email' => 'required|email|exists:admins,email',
         'password' => 'required|min:5|max:35'
         ], [
            'email.exists'=> 'Email tidak terdaftar!'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.login')->with('fail', 'Ada yang salah !');
        }
    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
