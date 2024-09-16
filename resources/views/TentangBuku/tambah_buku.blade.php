<!-- resources/views/PeminjamanBuku/tambah-buku.blade.php -->
@extends('main')

@section('title', 'Tambah Buku')

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
                            <strong class="card-title">Tambah Buku</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('tentangBuku') }}" method="post">
                                @csrf 
                                <div class="form-group">
                                    <label for= "judul">Judul</label>
                                    <input type="text" name="judul" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for= "penulis">Penulis</label>
                                    <input type="text" name="penulis" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for= "genre">Genre</label>
                                    <input type="text" name="genre" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for= "stok">Stok</label>
                                    <input type="number" name="stok" class="form-control"  required>
                                </div>
                                
                                <button type="submit" class="btn btn-warning">Simpan Buku</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



    
