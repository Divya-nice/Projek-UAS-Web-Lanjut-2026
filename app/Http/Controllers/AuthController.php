<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FORM REGISTER
    |--------------------------------------------------------------------------
    */

    public function showRegister()
    {
        return view('register');
    }

    /*
    |--------------------------------------------------------------------------
    | PROSES REGISTER
    |--------------------------------------------------------------------------
    */

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('login')
            ->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    /*
    |--------------------------------------------------------------------------
    | FORM LOGIN
    |--------------------------------------------------------------------------
    */

    public function showLogin()
    {
        return view('login');
    }

    /*
    |--------------------------------------------------------------------------
    | PROSES LOGIN
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {

            $request->session()->regenerate();

            return redirect()->route('beranda');
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password salah.'
            ])
            ->withInput();
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}