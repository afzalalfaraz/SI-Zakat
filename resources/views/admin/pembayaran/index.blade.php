@extends('layout.admin')

@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="mb-6 d-flex justify-content-end">
                        <a href="/pembayaran-create" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengirim</th>
                                <th>Nama Bank</th>
                                <th>Nomor Rekening</th>
                                <th>Jenis Donasi</th>
                                <th>Jumlah</th>
                                <th>Bukti</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($pembayaran as $bayar)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $bayar->nama_pengirim }}</td>
                                    <td>{{ $bayar->nama_bank }}</td>
                                    <td>{{ $bayar->no_rek }}</td>
                                    <td>{{ $bayar->donasi->nama }}</td>
                                    <td>Rp{{ number_format($bayar->jumlah, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ asset('storage/bukti_pembayaran/' . $bayar->bukti) }}" target="_blank">
                                            <img src="{{ asset('storage/bukti_pembayaran/' . $bayar->bukti) }}" alt="Bukti Pembayaran" class="img-fluid" width="100">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/pembayaran-edit-{{ $bayar->id }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="/pembayaran-delete-{{ $bayar->id }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
