<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function loginPage(){
        return view('Login.login');
    }   

    public function postLogin(Request $request){
        // // dd($request->all());
        // if(Auth::attempt($request->only('email','password'))){
        //     return redirect('/home');
        // }
        // return redirect('/');
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function register(){
        return view('Login.register');
    }

    public function saveData(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'noTelepon' => $request->noTelepon,
            'alamat' => $request->alamat,
            'role' => 'user',
            'remember_token' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return view('/welcome');
    }
}
