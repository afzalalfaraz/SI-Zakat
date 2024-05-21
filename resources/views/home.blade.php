@extends('layout.user')
@section('content')
    <!--================ Start Home Banner Area =================-->
    <section id="banner" class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <p class="text-uppercase">
                                <style>
                                    .feature_area {
                                        position: relative;
                                        z-index: 2;
                                    }

                                    #banner {
                                        position: relative;
                                        z-index: 1;
                                        /* Ini akan menempatkannya di bawah .feature_area */
                                    }

                                    .quote-bubble {
                                        background-color: rgba(245, 245, 245, 0.7);
                                        /* Transparansi 70% */
                                        border: 1px solid #ddd;
                                        /* Batasan */
                                        padding: 20px;
                                        /* Ruang dalam */
                                        border-radius: 10px;
                                        /* Sudut melengkung */
                                        margin: 20px 0;
                                        /* Margin untuk pemisahan */
                                    }

                                    .quote-bubble h3 {
                                        text-align: center;
                                        /* Menyelaraskan teks ke tengah */
                                        margin: 10px 0;
                                        /* Margin antar judul */
                                    }

                                    .quote-bubble p {
                                        text-align: center;
                                        /* Menyelaraskan teks ke tengah */
                                    }
                                </style>
                                </head>

                                <body>
                                    <div class="container">
                                        <div class="quote-bubble"> <!-- Gelembung untuk menampung konten -->
                                            <h3>MASJID AL-KHAIR</h3>
                                            <h3 class="text-uppercase mt-4 mb-5">خُذْ مِنْ أَمْوَٰلِهِمْ صَدَقَةً
                                                تُطَهِّرُهُمْ وَتُزَكِّيهِم بِهَا وَصَلِّ عَلَيْهِمْ ۖ إِنَّ صَلَوٰتَكَ
                                                سَكَنٌ لَّهُمْ ۗ وَٱللَّهُ سَمِيعٌ عَلِيمٌ</h3>
                                            <h3>"Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu
                                                membersihkan dan mensucikan mereka dan berdoalah untuk mereka. Sesungguhnya
                                                doa kamu itu (menjadi) ketenteraman jiwa bagi mereka. Dan Allah Maha
                                                Mendengar lagi Maha Mengetahui."</h3>
                                            <h3>(At-Taubah: 103)</h3>
                                        </div>
                                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->
    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top" style="margin-top: -310px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        {{-- <h2 class="mb-3">Waktu Adzan</h2>
                        <p>Jangan lupa sholat</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-3">
                <div class="col-lg-2 col-md-6">
                    <div class="single_feature">
                        <div class="desc-center">
                          <i class="fa-regular fa-clock" style="font-size: 40px; "></i>
                            <h4 class="mt-3 mb-2">Subuh</h4>
                            <p>
                                04.48 WIB
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_feature">
                        <div class="desc-center">
                          <i class="fa-regular fa-clock" style="font-size: 40px; "></i>
                            <h4 class="mt-3 mb-2">Dzuhur</h4>
                            <p>
                                12.07 WIB
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_feature">
                        <div class="desc-center">
                          <i class="fa-regular fa-clock" style="font-size: 40px; "></i>
                            <h4 class="mt-3 mb-2">Ashar</h4>
                            <p>
                                15.30 WIB
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_feature">
                        <div class="desc-center">
                          <i class="fa-regular fa-clock" style="font-size: 40px; "></i>
                            <h4 class="mt-3 mb-2">Maghrib</h4>
                            <p>
                                18.06 WIB
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="single_feature">
                        <div class="desc-center">
                          <i class="fa-regular fa-clock" style="font-size: 40px; "></i>
                            <h4 class="mt-3 mb-2">Isya</h4>
                            <p>
                                19.18 WIB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

    </div>
    {{-- visi misi --}}
    <section id="visimisi" class="feature_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
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
    <!--================ End Feature Area =================-->

    {{-- agenda --}}
    <section id="agenda">
        <div class="popular_courses">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3">AGENDA</h2>
                            <p>
                                Kegiatan di masjid Al-Khair
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single course -->
                    <div class="col-lg-12">
                        <div class="owl-carousel active_course">
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="img/courses/c1.jpg" alt="" />
                                </div>
                                <div class="course_content">


                                    <h4 class="mb-3">
                                        <a href="course-details.html">Pengajian bersama Ustad Abdul Somad</a>
                                    </h4>
                                    <p>
                                        pengajian hari jumat di masjid Al-Khair jam 14.00 sampai dengan selesai
                                    </p>
                                    <div
                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                        <div class="authr_meta">


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="img/courses/c2.jpg" alt="" />
                                </div>
                                <div class="course_content">


                                    <h4 class="mb-3">
                                        <a href="course-details.html">Belajar Mengaji bersama</a>
                                    </h4>
                                    <p>
                                        cara mengaji dengan benar : hari sabtu setelah dzuhur di masjid Al-Khair
                                    </p>
                                    <div
                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                        <div class="authr_meta">


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="img/courses/g1.jpg" alt="" />
                                </div>
                                <div class="course_content">
                                    <h4 class="mb-3">
                                        <a href="course-details.html">kajian rutin</a>
                                    </h4>
                                    <p>
                                        melakukan kajian rutin setiap hari...
                                    </p>
                                    <div
                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                        <div class="authr_meta">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->

    <!--================ End Testimonial Area =================-->
@endsection
