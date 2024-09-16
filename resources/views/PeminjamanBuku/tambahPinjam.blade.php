<!-- resources/views/PeminjamanBuku/tambahPeminjaman.blade.php -->
@extends('main')

@section('title', 'Tambah Peminjaman')

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
                            <strong class="card-title">Tambah Peminjaman</strong>
                        </div>
                        <div class="card-body">
                             <form action="{{url('/simpanPeminjaman')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="tgl_peminjaman">judul buku:</label>
                                    <input type="text" name="buku" id="tgl_peminjaman" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_peminjaman">Pengguna:</label>
                                    <input type="text" name="pengguna" id="tgl_peminjaman" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_peminjaman">Tanggal Peminjaman:</label>
                                    <input type="date" name="tgl_peminjaman" id="tgl_peminjaman" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_harus_kembali">Tanggal Harus Kembali:</label>
                                    <input type="date" name="tgl_harus_kembali" id="tgl_harus_kembali" class="form-control"  required>
                                </div>
                                
                                <button type="submit" class="btn btn-warning">Simpan Peminjaman</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
