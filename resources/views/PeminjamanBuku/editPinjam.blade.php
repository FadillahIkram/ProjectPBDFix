<!-- resources/views/PeminjamanBuku/editPeminjaman.blade.php -->
@extends('main')

@section('title', 'Edit Peminjaman')

@section('breadcrumbs')
    <!-- Breadcrumbs code here -->
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Edit Peminjaman</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/simpanPerubahanPeminjaman/'.$id_peminjaman->id_peminjaman) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="tgl_peminjaman">ID_PEMINJAMAN</label>
                                    <input type="number" name="id_peminjaman" id="id_peminjaman" class="form-control" value="{{ $id_peminjaman->id_peminjaman }}" readonly>

                                </div>
                                <div class="form-group">
                                    <label for="buku">Judul Buku:</label>
                                    <!-- Dropdown untuk memilih judul buku -->
                                    <!-- Gantilah 'your_books' dengan nama variabel yang menyimpan data buku -->
                                    <select name="buku" id="buku" class="form-control">
                                        @foreach ($daftarBuku as $book)
                                            <option value="{{ $book->id_buku }}">{{ $book->judul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pengguna">Nama Pengguna:</label>
                                    <!-- Dropdown untuk memilih nama pengguna -->
                                    <!-- Gantilah 'your_users' dengan nama variabel yang menyimpan data pengguna -->
                                    <select name="pengguna" id="pengguna" class="form-control">
                                        @foreach ($daftarPengguna as $user)
                                            <option value="{{ $user->id_pengguna }}">{{ $user->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_peminjaman">Tanggal Peminjaman:</label>
                                    <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_harus_kembali">Tanggal Harus Kembali:</label>
                                    <input type="date" name="tgl_harus_kembali" id="tgl_harus_kembali" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_pengembalian">Tanggal Pengembalian:</label>
                                    <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
