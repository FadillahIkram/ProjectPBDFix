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
                            <strong>Daftar Buku</strong>
                            <a href="{{ url('/tentangBuku/tambahBuku') }}" class="btn btn-success float-right " style="border-radius: 10px;">Tambah Buku</a>
                        </div>
                        <div class="card-body card-block">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Genre</th>
                                        <th>Stok</th>
                                        <th>    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($daftarBuku as $buku)
                                        <tr>
                                            <td>{{ $buku->id_buku }}</td>
                                            <td>{{ $buku->judul }}</td>
                                            <td>{{ $buku->penulis }}</td>
                                            <td>{{ $buku->genre }}</td>
                                            <td>{{ $buku->stok }}</td>
                                            <td>
                                                <a href="{{ url('/tentangBuku/editBukuForm/'.$buku->id_buku) }}" class="btn btn-warning" style="border-radius: 10px;">edit</a>
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
