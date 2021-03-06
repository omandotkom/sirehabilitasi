<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
class LoginController extends Controller
{
    //login
    public function authenticate(Request $request)
    {
        Log::debug($request);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            switch(Auth::user()->role){
                case 'admin':
                    return redirect()->route('dashboardadmin');
                    break;
                case 'asesmen' :
                    return redirect()->route('dashboardasesmen');
                    break;
                case "sosial" :
                    return redirect()->route('dashboardsosial');
                case "perawat" :
                    return redirect()->route('dashboardperawat');
                case "psikolog" :
                    return redirect()->route('dashboardpsikolog');
                    break;
            }
            //return redirect()->intended('dashboard');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
        return back()->withErrors(['msg', 'Username atau Password Salah.']);
    }
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}
