@extends('layout.admin')

@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Donasi</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Donasi</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="mb-6 d-flex justify-content-end">
                        <a href="/donasi-create" class="btn btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($donasi as $don)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $don->nama }}</td>
                                    <td>{{ $don->deskripsi }}</td>
                                    <td>
                                        <a href="/donasi-edit-{{ $don->id }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="/donasi-delete-{{ $don->id }}" method="POST" style="display:inline;">
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
