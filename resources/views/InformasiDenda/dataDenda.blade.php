@extends('main')

@section('title', 'Data Denda Pengguna')

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
                                <strong class="card-title">Data Denda Pengguna</strong>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>ID Peminjaman</th>
                                        <th>Nama Pengguna</th>
                                        <th>Tanggal Harus Kembali</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Jumlah Denda</th>
                                        <th>    </th>
                                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($denda as $item)
                                        <tr>
                                            <td>{{ $item->id_peminjaman }}</td>
                                            <td>{{ $item->Nama_Pengguna }}</td>
                                            <td>{{ $item->Tanggal_Harus_Kembali }}</td>
                                            <td>{{ $item->Tanggal_Pengembalian }}</td>
                                            <td>{{ $item->Jumlah_Denda }}</td>
                                            <td>
                                                <a href="{{ url('/informasiDenda/editDendaForm/'.$item->id_peminjaman) }}" class="btn btn-warning" style="border-radius: 10px;">Edit</a>
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
