@extends('layouts.master')

@section('title', 'MATICEH')
@section('moreCss')
<style>
    .single_page_menu .main-menu-item ul li .nav-link{
        color: #0c0c0c !important;
    }
</style>
@endsection

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5 class="line-1 anim-typewriter">Tidak ada kata terlambat untuk belajar</h5>
                            <h1>Maticeh membantu Anda menemukan guru yang tepat</h1>
                            <p>
                                Belajarlah untk membuat dunia lebih baik!
                            </p>
                            <!-- <a href="#" class="btn_2">Get Started </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{asset('assets/img/learning_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>Tentang Kami</h5>
                        <h2>Apa itu Maticeh?</h2>
                        <p><b>MATICEH </b>adalah portal pencarian guru privat terbesar di Indonesia. Berbagai keunggulan
                            kami membantu kamu <b>#BelajarJadiHebat</b></p>
                        <ul>
                            <li>
                                <img class="img_index float-left" src="{{asset('assets/img/stars (3).png')}}" alt="">
                                <h5 class="h5_index">Jaminan Sangat Puas</h5>
                            </li>
                            <li><img class="img_index" src="{{asset('assets/img/scholarship (3).png')}}" alt="">
                                <h5 class="h5_index">Pilihan Kategori Pelajaran Lengkap</h5>
                            </li>
                            <li><img class="img_index" src="{{asset('assets/img/stopwatch(3).png')}}" alt="">
                                <h5 class="h5_index">Belajar Dimana Saja dan Kapan Saja</h5>
                            </li>
                            <li><img class="img_index" src="{{asset('assets/img/teamwork (3).png')}}" alt="">
                                <h5 class="h5_index">Lebih dari 80.000 Guru</h5>
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->


    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Kenapa Harus Maticeh?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Pilihan Les</h4>
                            <p>Paling lengkap untuk segala bidang</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Pilihan Guru</h4>
                            <p>Lebih dari 80,000 pilihan, kamu bisa pilih sendiri!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Mata Pelajaran</h4>
                            <p>Apa saja yang kamu mau, kami siap!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-location-pin"></i></span>
                            <h4>Lokasi Belajar</h4>
                            <p>Di mana saja sesuai kemauanmu!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-calendar"></i></span>
                            <h4>Jadwal Belajar</h4>
                            <p>Kapan saja mengikuti jadwal kegiatanmu!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-comments"></i></span>
                            <h4>Free Konsul</h4>
                            <p>Tanyakan langsung kepada gurumu!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h2>Apa yang Anda dapatkan sebagai Guru di Maticeh?</h2>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-money"></span>
                                    <h4>Raih Penghasilan Jutaan Rupiah per Bulan</h4>
                                    <p>Anda bisa mendapatkan penghasilan sesuai dengan jam ajar yang Anda lakukan.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-time"></span>
                                    <h4>Waktu dan Tempat Mengajar Fleksibel</h4>
                                    <p>Anda bisa mengajar di tempat dan waktu yang fleksibel dan menyesuaikan dengan kesibukan Anda lainnya.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-user"></span>
                                        <h4>Banyak Murid yang Ingin Belajar</h4>
                                        <p>Anda bisa mendapatkan berbagai macam tawaran mengajar secara online maupun offline.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                    <div class="learning_member_text_iner">
                                        <span class="ti-link"></span>
                                            <h4>Maticeh Bantu Kelola Kelas Anda</h4>
                                            <p>Maticeh mengelola kelas dan mengurus pembayaran kepada murid untuk Anda.</p>
                                    </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{asset('assets/img/advance_feature_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->
@endsection