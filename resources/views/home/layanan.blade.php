@extends('layouts/master')
@section('title', 'Layanan')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Layanan Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start:: padding_top-->
    <section class="special_cource pb-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Bidang Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('assets/img/les.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Les SMA</a>
                            <a href="course-details.html">
                                <h3>Mata Pelajaran SMA</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{asset('assets/img/author/author_1.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('assets/img/swim.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Les Olahraga</a>
                            <a href="course-details.html">
                                <h3>Basic Olahraga </h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('assets/img/cook.jpg')}}" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Les Masak</a>
                            <a href="course-details.html">
                                <h3>Basic Masak</h3>
                            </a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{asset('assets/img/author/author_3.png')}}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/color_star.svg')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/star.svg')}}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
@endsection