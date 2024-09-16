<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Buku;

class BukuController extends Controller

{
    public function tampilDataBuku()
    {
        $daftarBuku = DB::table('buku')->get();

        return view('TentangBuku.daftar_buku', ['daftarBuku' => $daftarBuku]);

    }

    public function tambahBukuForm()
    {
        return view('tentangBuku.tambah_buku');
    }
    
    
    public function tambahBuku(Request $request)
    {   
        $judul = $request->input('judul');
        $Penulis = $request->input('penulis');
        $Genre = $request->input('genre');
        $Stok = $request->input('stok');

    // Panggil stored procedure
        DB::select('CALL tambahBuku(?, ?, ?, ?)', [
        $judul,
        $Penulis,
        $Genre,
        $Stok
        ]);
        
        return redirect('tentangBuku')->with('success', 'Buku berhasil disimpan.');
        
    }

    public function editBukuForm($id)
    {
        // Ambil data buku berdasarkan ID
        $buku = DB::table('buku')->where('id_buku', $id)->first();
        // Ambil semua data buku
        return view('tentangBuku.edit_buku', compact('buku'));
    }


    public function updateBuku(Request $request, $id)
    {
        DB::table('buku')->where('id_buku', $id)
            ->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'genre' => $request->genre,
                'stok' => $request->stok
            ]);
        return redirect('tentangBuku')->with('success', 'Buku berhasil diperbarui.');
    }

    

    public function hapusBuku($id)
    {
    // Temukan dan hapus buku berdasarkan ID
        $buku = Buku::find($id);
        $buku->delete();

        return redirect('/tentangBuku')->with('success', 'Buku berhasil dihapus.');
    }
}