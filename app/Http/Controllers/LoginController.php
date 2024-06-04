<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(){
        return view('login');
    }
    public function authadmin(){
        return view('authadmin');
    }
    public function register(){
        return view('register');
    }
    public function proses_login(Request $request){
        // $data = $request->all();
        // dd($data);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Berhasil logout');
    }
}
