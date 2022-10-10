<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login.index',[
            'menu' => 1,
            'title' => 'Semerusmart Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            $hak = auth()->user()->hak_akses;
            if($hak == 4){
                return redirect()->intended('erm');
            }
        } 
        return back()->with('loginError', 'Login gagal !');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();     
        return redirect('/login');
    }
}
