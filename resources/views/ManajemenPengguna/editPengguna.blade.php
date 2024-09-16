<!-- resources/views/tentangBuku/edit_buku.blade.php -->
@extends('main')

@section('title', 'Edit Pengguna')

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
                            <strong class="card-title">Edit Pengguna</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('manajemenPengguna/' . $pengguna->id_pengguna) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Pengguna</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $pengguna->nama }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ $pengguna->alamat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $pengguna->email }}" required>
                                </div>

                                <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenggunaModal">Hapus Pengguna</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk konfirmasi penghapusan buku -->
    <div class="modal fade" id="hapusPenggunaModal" tabindex="-1" role="dialog" aria-labelledby="hapusPenggunaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusPenggunaModalLabel">Konfirmasi Hapus Akun Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus akun ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <a href="{{ url('/manajemenPengguna/hapusPengguna/' . $pengguna->id_pengguna) }}" class="btn btn-danger">Ya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
