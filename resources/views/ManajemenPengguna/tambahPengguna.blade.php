<!-- resources/views/PeminjamanBuku/tambah-buku.blade.php -->
@extends('main')

@section('title', 'Tambah Pengguna')

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
                            <strong class="card-title">Tambah Pengguna</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('manajemenPengguna') }}" method="post">
                                @csrf 
                                <div class="form-group">
                                    <label for= "nama">Nama Pengguna</label>
                                    <input type="text" name="nama" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for= "alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label for= "email">Email</label>
                                    <input type="text" name="email" class="form-control"  required>
                                </div>
                                
                                <button type="submit" class="btn btn-warning">Simpan Pengguna</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



    
