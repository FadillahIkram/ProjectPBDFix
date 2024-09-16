<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Pengguna;

class PenggunaController extends Controller
{

    public function tampilDataPengguna()
    {
        $daftarPengguna = DB::table('pengguna')->get();

        return view('manajemenPengguna.dataPengguna', ['daftarPengguna' => $daftarPengguna]);

    }

    public function tambahPenggunaForm()
    {
        return view('manajemenPengguna.tambahPengguna');
    }

    public function tambahPengguna(Request $request)
    {   
        $NamaPengguna = $request->input('nama');
        $Alamat = $request->input('alamat');
        $Email = $request->input('email');

    // Panggil stored procedure
        DB::select('CALL tambahPengguna(?, ?, ?)', [
        $NamaPengguna,
        $Alamat,
        $Email,
        ]);
        
        return redirect('manajemenPengguna')->with('success', 'Buku berhasil disimpan.');
    }

    public function editPenggunaForm($id)
    {
        // Ambil data buku berdasarkan ID
        $pengguna = DB::table('pengguna')->where('id_pengguna', $id)->first();
        // Ambil semua data buku
        return view('manajemenPengguna.editPengguna', compact('pengguna'));
    }

    public function updatePengguna(Request $request, $id)
    {
        DB::table('pengguna')->where('id_pengguna', $id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'email' => $request->email
            ]);
        return redirect('manajemenPengguna')->with('success', 'Akun Peminjam berhasil diperbarui.');
    }

    public function hapusPengguna($id)
    {
    // Temukan dan hapus buku berdasarkan ID
        $pengguna = Pengguna::find($id);
        $pengguna->delete();

        return redirect('/manajemenPengguna')->with('success', 'Akun Peminjam berhasil dihapus.');
    }

}