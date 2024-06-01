<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\PemetaanPetugas;

class AuthController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }

    public function dologin(Request $request) {
        // validasi
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        if (auth()->attempt($credentials)) {
    
            // buat ulang session login
            $request->session()->regenerate();
            session(['berhasil_login' => true]);
            $user = auth()->user(); // Mendapatkan data user yang login 

            // Mendapatkan data user dari database berdasarkan id_user
            $user = User::find($user->id); // Mengambil data user dari database berdasarkan id_user yang login

            $user->nama; 
            $user->email; 
            $user->no_telepon; 
    
            // Lakukan sesuatu dengan data yang didapatkan
    
            if ($user->id_role === 1) {
                // jika user superadmin
                return redirect()->intended('/admin');
            } else {
                // jika user pegawai
                return redirect()->intended('/tourleader');
            }
        }
        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'Username atau Password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
        return redirect('/');
    }
}
