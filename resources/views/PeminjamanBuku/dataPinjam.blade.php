<!-- resources/views/PeminjamanBuku/dataPinjam.blade.php -->

@extends('main')

@section('title', 'Data Peminjaman Buku')

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
                            <div class="d-flex justify-content-between align-items-center">
                                <strong class="card-title">Data Peminjaman Buku</strong>
                                <a href="{{ url('/PeminjamanBuku/tambahPeminjaman') }}" class="btn btn-primary" style="border-radius: 10px;">Tambah Peminjaman</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>ID Peminjaman</th>
                                        <th>Judul Buku</th>
                                        <th>Nama Pengguna</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Harus Kembali</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>    </th>
                                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($peminjaman as $peminjamans)
                                        <tr>
                                            <td>{{ $peminjamans->id_peminjaman }}</td>
                                            <td>{{ $peminjamans->judul_buku }}</td>
                                            <td>{{ $peminjamans->nama_pengguna }}</td>
                                            <td>{{ $peminjamans->tgl_peminjaman }}</td>
                                            <td>{{ $peminjamans->tgl_harus_kembali }}</td>
                                            <td>{{ $peminjamans->tgl_pengembalian }}</td>
                                            <td>
                                                <a href="{{ url('/PeminjamanBuku/edit/'.$peminjamans->id_peminjaman) }}" class="btn btn-warning" style="border-radius: 10px;">Edit</a>
                                            </td>
                                            <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection