<?php

// AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email_admin');
        $password = $request->input('kata_sandi_admin');

        // Periksa apakah username dan password sesuai dengan data di database
        $admin = Admin::where('email_admin', $email)->where('kata_sandi_admin', $password)->first();

        if (!$admin) {
            // Jika username atau password salah, kembalikan ke halaman login dengan pesan kesalahan
            return redirect('/login')->with('error', 'Username atau password salah.');
        }

        // Misalnya, Anda dapat menyimpan ID petugas yang berhasil login dalam sesi
        // dan memeriksa sesi untuk mengarahkan ke halaman home
        session(['id_admin' => $admin->id_admin]);

        return redirect('/home');
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

        $data['kata_sandi_admin'] = Hash::make($data['kata_sandi_admin']);
        // Panggil store procedure untuk menambahkan admin
        DB::select('CALL tambahAdmin(?, ?, ?)', [
            $data['nama_admin'],
            $data['email_admin'],
            $data['kata_sandi_admin']
        ]);

        return redirect()->route('welcome')->with('success', 'Registrasi berhasil! Silahkan login.');
    }
}
