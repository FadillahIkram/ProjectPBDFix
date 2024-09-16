<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman'; // Sesuaikan dengan nama tabel yang sesuai
    protected $primaryKey = 'id_peminjaman'; // Sesuaikan dengan nama primary key yang sesuai

    // Jika menggunakan stored procedure, Anda dapat menyesuaikan metode berikut:
    public static function tampilPeminjaman()
    {
        return static::hydrate(DB::select('CALL tampilpeminjaman()'));
    }

    // Definisikan relasi jika ada
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
