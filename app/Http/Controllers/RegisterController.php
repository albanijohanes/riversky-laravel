<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerPost(Request $request){
        $user = User::create([
            'nama' => $request->name,
            'nim' => $request->nim,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            session()->flash("success", "Register berhasil");
            return redirect()->route('login');
        }else{
            session()->flash('error', 'Mohon di isi dengan benar');
            return back();
        }
    }
}
