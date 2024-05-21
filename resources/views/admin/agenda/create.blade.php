@extends('layout.admin')

@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Agenda</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.agenda.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
