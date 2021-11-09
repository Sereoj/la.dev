<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function home()
    {
        return view('home', ['cities' => City::all()]);
    }

    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if (Auth::attempt($request->only(['email','password'])))
        {
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'Email or password incorrect'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        return view('profile');
    }

    public function admin()
    {
        //$this->authorize('admin');
        return 'Ты админ!';
    }
}
