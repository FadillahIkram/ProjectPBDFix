<!-- resources/views/TentangBuku/daftar_buku.blade.php -->
@extends('main')

@section('title', 'Daftar Buku')

@section('breadcrumbs')
    <!-- Sesuaikan dengan kebutuhan Anda -->
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Daftar Pengguna</strong>
                            <a href="{{ url('/manajemenPengguna/tambahPengguna') }}" class="btn btn-success float-right " style="border-radius: 10px;">Tambah Pengguna</a>
                        </div>
                        <div class="card-body card-block">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>ID</th>
                                        <th>Nama Pengguna</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($daftarPengguna as $pengguna)
                                        <tr>
                                            <td>{{ $pengguna->id_pengguna }}</td>
                                            <td>{{ $pengguna->nama }}</td>
                                            <td>{{ $pengguna->alamat }}</td>
                                            <td>{{ $pengguna->email }}</td>
                                            <td>
                                                <a href="{{ url('/manajemenPengguna/editPenggunaForm/'.$pengguna->id_pengguna) }}" class="btn btn-warning" style="border-radius: 15px;">edit</a>
                                            </td>
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
