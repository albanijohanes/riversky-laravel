<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerPost(Request $request){
        $validasi       = Validator::make($request->all(), [
            'nama'      => 'required',
            'nim'       => 'required|numeric',
            'username'  => 'required',
            'email'     => 'required|unique:users,email',
            'password'  => 'required|confirmed'
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        User::create([
            'nama'      => $request->name,
            'nim'       => $request->nim,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        session()->flash("success", "Register berhasil");
        return redirect()->route('login');

    }
}
