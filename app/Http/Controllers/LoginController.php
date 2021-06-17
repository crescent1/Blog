<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function login()
    {
        return view('dashboard.auth.login');

    }

    public function processLogin(Request $request)
    {
        $auth = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($auth)) {

            $user = Auth::user();

            // if($user->status == 0) {
            //     Auth::logout();
            //     return redirect()->route('login')->with('message', 'Akun telah dihapus');
            // }

            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('message', 'Email atau password salah');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }
}
