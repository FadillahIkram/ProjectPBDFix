<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Pengguna;

class DendaController extends Controller
{

    public function tampilDataDenda()
    {
        $denda = DB::select('CALL GetDenda()');
    
        return view('informasiDenda.dataDenda', ['denda' => $denda]);
    }
   
    
    public function editDendaForm($id_peminjaman)
    {
        // Mengambil data denda yang akan diedit
        $dendaToEdit = DB::select('CALL editDenda(?)', [$id_peminjaman]);

        // Memastikan data denda ditemukan

        // Menampilkan formulir edit dengan data denda yang akan diedit
        return view('informasiDenda.editDenda', ['dendaToEdit' => $dendaToEdit]);
    }


    public function updateDenda(Request $request, $id_peminjaman)
{
    // Validasi data formulir
    $request->validate([
        'jumlah_denda' => 'required|numeric',
    ]);

    // Perbarui atau sisipkan catatan Denda di database menggunakan stored procedure UpdateDenda
    DB::select('CALL UpdateDenda(?, ?)', [$id_peminjaman, $request->input('jumlah_denda')]);

    // Alihkan kembali ke halaman dataDenda dengan pesan sukses
    return redirect('/informasiDenda')->with('success', 'Denda berhasil diperbarui');
}




}