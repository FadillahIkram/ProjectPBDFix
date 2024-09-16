<!-- resources/views/tentangBuku/edit_denda.blade.php -->
@extends('main')

@section('title', 'Edit Denda')

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
                            <strong class="card-title">Tentukan Denda</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/informasiDenda/updateDenda/' . $dendaToEdit[0]->id_peminjaman) }}" method="post">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="id_peminjaman">ID_PEMINJAMAN</label>
                                    <input type="number" name="id_peminjaman" id="id_peminjaman" class="form-control" value="{{ $dendaToEdit[0]->id_peminjaman }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Pengguna</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $dendaToEdit[0]->Nama_Pengguna }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_denda">Jumlah Denda</label>
                                    <input type="number" name="jumlah_denda" class="form-control" step="0.01" required>
                                </div>

                                <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                <a href="{{ url('/informasiDenda') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
