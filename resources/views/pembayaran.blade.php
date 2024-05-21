@extends('layout.user')
@section('content')
    {{-- visi misi --}}
    <section id="visimisi" style="padding-top: 150px;">
        <div class="container ">
            <div class="row justify-content-center"> <!-- Row untuk memusatkan konten -->
                <div class="col-md-3" style="display: flex; justify-content: center;"> <!-- Menggunakan Flexbox -->
                    <div class="single_feature" style="text-align: center;"> <!-- Menyesuaikan elemen -->
                        {{-- <div class="icon"><span class="flaticon-student"></span></div> --}}
                        <div class="desc">
                            <h4 class="mt-3 mb-2">QR</h4>
                            <p>
                                Menjadi pusat informasi dan sarana pengelolaan zakat, infaq, dan sedekah yang terpercaya
                                serta menyediakan platform yang memudahkan umat dalam berkontribusi untuk kesejahteraan umat
                                melalui pembangunan masjid dan pemberdayaan masyarakat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-9"> <!-- Menggunakan Flexbox -->
                    <div class="single_feature"> <!-- Menyesuaikan elemen -->
                        <div class="desc">
                            <h4 class="mt-3 mb-2 text-center">Formulir Bukti Pembayaran</h4>
                            <form method="POST" action="/pembayaran/store" enctype="multipart/form-data">
                                <!-- CSRF Token untuk keamanan di Laravel -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group mb-2">
                                    <label for="donasi_id">Pilih Donasi</label>
                                    <select class="form-select" name="donasi_id" id="donasi_id" required>
                                        <option value="">-- Pilih Donasi --</option>
                                        @foreach ($donasis as $donasi)
                                            <option value="{{ $donasi->id }}">{{ $donasi->nama }}</option>
                                            <!-- Asumsikan Donasi memiliki nama -->
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Nama Bank -->
                                <div class="form-group">
                                    <label for="nama_bank">Nama Bank</label>
                                    <input type="text" class="form-control" name="nama_bank" id="nama_bank" required>
                                </div>

                                <!-- Nomor Rekening -->
                                <div class="form-group">
                                    <label for="no_rek">Nomor Rekening</label>
                                    <input type="number" class="form-control" name="no_rek" id="no_rek" required>
                                </div>

                                <!-- Nama Pengirim -->
                                <div class="form-group">
                                    <label for="nama_pengirim">Nama Pengirim</label>
                                    <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim"
                                        required>
                                </div>

                                <!-- Jumlah -->
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" required>
                                </div>

                                <!-- Bukti (File Upload) -->
                                <div class="form-group">
                                    <label for="bukti">Bukti Pembayaran</label>
                                    <input type="file" class="form-control" name="bukti" id="bukti" required>
                                </div>

                                <!-- Tombol Kirim -->
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
