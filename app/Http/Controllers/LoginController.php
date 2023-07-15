<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('admin');
        }
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $validasi = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();

            return redirect()->route('admin');
        }
        return redirect()->back()->with('errors', 'Username atau password salah')->withInput();
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
