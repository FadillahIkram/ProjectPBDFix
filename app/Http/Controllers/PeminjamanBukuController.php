<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Pengguna;

class PeminjamanBukuController extends Controller
{

    public function tampilDataPeminjaman()
    {
        $peminjaman = DB::select('CALL tampilPeminjaman()');
    
        return view('PeminjamanBuku.dataPinjam', ['peminjaman' => $peminjaman]);
    }




    public function tambahPeminjaman(Request $request)
    {   
        $id_buku = $request->input('buku');
        $id_pengguna = $request->input('pengguna');
        $tglPeminjaman = $request->input('tgl_peminjaman');
        $tglHarusKembali = $request->input('tgl_harus_kembali');

    // Panggil stored procedure
        DB::select('CALL tambahPeminjaman(?, ?, ?, ?)', [
        $id_buku,
        $id_pengguna,
        $tglPeminjaman,
        $tglHarusKembali
    ]);
    $updatedPeminjaman = isset($result[0]) ? $result[0] : null;

    // Redirect ke halaman Data Peminjaman Buku setelah menambah data baru
        // Setelah menyimpan data, redirect ke halaman yang memuat data baru
        return redirect('/PeminjamanBuku')->with('success', $updatedPeminjaman);
    }


    public function tambahPeminjamanForm()
    {
        $daftarBuku = Buku::all(); // Ambil semua data buku
        $daftarPengguna = Pengguna::all(); // Ambil semua data pengguna

        return view('PeminjamanBuku.tambahPinjam', compact('daftarBuku', 'daftarPengguna'));
    }

    public function editPeminjamanForm($id)
    {
        $id_peminjaman = DB::table('peminjaman')
        ->select('id_peminjaman')
        ->where('id_peminjaman' ,'=',$id)
        ->first();
        $daftarBuku = Buku::all(); // Ambil semua data buku
        $daftarPengguna = Pengguna::all();
        return view('PeminjamanBuku.editPinjam', ['id_peminjaman'=>$id_peminjaman, 'daftarBuku'=>$daftarBuku, 'daftarPengguna'=>$daftarPengguna]);
    }


    public function simpanPerubahanPeminjaman(Request $request, $id_peminjaman)
{
    $id_buku = $request->input('buku');
    $id_pengguna = $request->input('pengguna');
    $tgl_peminjaman = $request->input('tgl_peminjaman');
    $tgl_harus_kembali = $request->input('tgl_harus_kembali');
    $tgl_pengembalian = $request->input('tgl_pengembalian');

    // Panggil stored procedure
    $result = DB::select('CALL updatePeminjaman(?, ?, ?, ?, ?, ?)', [
        $id_peminjaman,
        $id_buku,
        $id_pengguna,
        $tgl_peminjaman,
        $tgl_harus_kembali,
        $tgl_pengembalian
    ]);

    // Ambil hasil query SELECT dari stored procedure
    $updatedPeminjaman = isset($result[0]) ? $result[0] : null;

    // Redirect ke halaman Data Peminjaman Buku setelah menyimpan perubahan
    return redirect('/PeminjamanBuku')->with('updatedPeminjaman', $updatedPeminjaman);
}
    

}

