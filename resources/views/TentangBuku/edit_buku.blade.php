<!-- resources/views/tentangBuku/edit_buku.blade.php -->
@extends('main')

@section('title', 'Edit Buku')

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
                            <strong class="card-title">Edit Buku</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('tentangBuku/' . $buku->id_buku) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="penulis">Penulis</label>
                                    <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <input type="text" name="genre" class="form-control" value="{{ $buku->genre }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" class="form-control" value="{{ $buku->stok }}" required>
                                </div>

                                <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusBukuModal">Hapus Buku</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk konfirmasi penghapusan buku -->
    <div class="modal fade" id="hapusBukuModal" tabindex="-1" role="dialog" aria-labelledby="hapusBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusBukuModalLabel">Konfirmasi Hapus Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda yakin ingin menghapus buku ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <a href="{{ url('/tentangBuku/hapusBuku/' . $buku->id_buku) }}" class="btn btn-danger">Ya</a>
                </div>
            </div>
        </div>
    </div>
@endsection
