@extends('layout.admin')

@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kas Keluar</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Kas</li>
            <li class="breadcrumb-item"><a href="">Data Kas Keluar</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Kas Keluar</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('kaskeluar.update', $kasKeluar->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kasKeluar->tanggal }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="{{ $kasKeluar->jumlah }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="keterangan" name="keterangan">{{ $kasKeluar->keterangan }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
