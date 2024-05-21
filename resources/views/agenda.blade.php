@extends('layout.user')
@section('content')
    {{-- agenda --}}
    <section id="agenda" style="padding-top: 100px;">
        <div class="popular_courses">
            <div class="container">
                <div class="row justify-content-center">
                    <hr style="width: 500%;">
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
                    @foreach ($agenda as $age)
                    <div class="col-lg-12">
                        <div class="owl-carousel active_course">
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{asset('Agenda Gambar/' . $age->gambar)}}" alt="" />
                                </div>
                                <div class="course_content">
                                    <h4 class="mb-3">
                                        <a href="">{{$age->judul}}</a>
                                    </h4>
                                    <p>{{$age->deskripsi}}</p>
                                    <divclass="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <div class="authr_meta">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
