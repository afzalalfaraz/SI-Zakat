@extends('layout.admin')

@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">Pembayaran</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('admin.pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="nama_pengirim" class="col-sm-3 col-form-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" placeholder="Nama Pengirim" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_bank" class="col-sm-3 col-form-label">Nama Bank</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_bank" name="nama_bank" placeholder="Nama Bank" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_rek" class="col-sm-3 col-form-label">Nomor Rekening</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_rek" name="no_rek" placeholder="Nomor Rekening" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="donasi_id" class="col-sm-3 col-form-label">Jenis Donasi</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="donasi_id" name="donasi_id" required>
                                    <option value="">Pilih Jenis Donasi</option>
                                    @foreach ($donasi as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bukti" class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="bukti" name="bukti" placeholder="bukti" required>
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
