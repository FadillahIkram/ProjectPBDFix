<?php

// AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi form login
        $credentials = $request->validate([
            'email_admin' => 'required|email',
            'kata_sandi_admin' => 'required',
        ]);

        // Lakukan proses login
        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email_admin' => 'Invalid credentials']);
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi form register
        $data = $request->validate([
            'nama_admin' => 'required',
            'email_admin' => 'required|email',
            'kata_sandi_admin' => 'required',
        ]);

        // Panggil store procedure untuk menambahkan admin
        DB::select('CALL tambahAdmin(?, ?, ?)', [
            $data['nama_admin'],
            $data['email_admin'],
            $data['kata_sandi_admin']
        ]);

        return redirect()->route('welcome')->with('success', 'Registrasi berhasil! Silahkan login.');
    }
}
