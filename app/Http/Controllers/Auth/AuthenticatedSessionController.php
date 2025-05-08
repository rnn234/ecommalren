<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Proses login user.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt authentication
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();


            // Redirect based on role
            return redirect()->intended(match (Auth::user()->role) {
                'admin' => '/admin',
                'seller' => '/seller',
                'customer' => '/customer',
                default => '/',
            })->with('status', 'Login berhasil!');
        }

        // If authentication fails
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Logout user dari aplikasi.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
