@extends('layout.user')
@section('content')
    {{-- visi misi --}}
    <section id="visimisi" style="padding-top: 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <hr style="width: 500%;">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">VISI & MISI</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center"> <!-- Row untuk memusatkan konten -->
                <div class="col-lg-4 col-md-6" style="display: flex; justify-content: center;"> <!-- Menggunakan Flexbox -->
                    <div class="single_feature" style="text-align: center;"> <!-- Menyesuaikan elemen -->
                        {{-- <div class="icon"><span class="flaticon-student"></span></div> --}}
                        <div class="desc">
                            <h4 class="mt-3 mb-2">VISI</h4>
                            <p>
                                Menjadi pusat informasi dan sarana pengelolaan zakat, infaq, dan sedekah yang terpercaya
                                serta menyediakan platform yang memudahkan umat dalam berkontribusi untuk kesejahteraan umat
                                melalui pembangunan masjid dan pemberdayaan masyarakat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" style="display: flex; justify-content: center;"> <!-- Menggunakan Flexbox -->
                    <div class="single_feature" style="text-align: center;"> <!-- Menyesuaikan elemen -->
                        <div class="desc">
                            <h4 class="mt-3 mb-2">MISI</h4>
                            <p>
                                Menyediakan platform yang mudah digunakan untuk melakukan pembayaran zakat, infaq, dan
                                sedekah secara online dengan transparansi dan keamanan yang tinggi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
