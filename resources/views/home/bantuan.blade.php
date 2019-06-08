@extends('layouts.master')
@section('title', 'Bantuan')
@section('moreCss')
<style>
    .main_menu .main-menu-item ul li .nav-link{
        color: #ffffff;
    }
    .menu_fixed .main-menu-item ul li .nav-link{
        color: #000;
    }
</style>
@endsection
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Bantuan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Temukan Jawaban Anda</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--review_part end-->
@endsection