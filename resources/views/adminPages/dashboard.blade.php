@extends('adminLayouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Dashboard</h2>
                {{-- <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add item</button> --}}
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>10368</h2>
                            <span>Jumlah Pemesan</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart1"></canvas>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <a href="/dataPemesan" class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi"></i>Detail
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="text">
                            <h2>388,688</h2>
                            <span>Guru Terverifikasi</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                    <a href="/dataGuru" class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi"></i>Detail
                    </a>
                </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <h2>1,086</h2>
                            <span>Guru Belum Terverifikasi</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                    <a href="/dataGuru" class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi"></i>Detail
                    </a>
                </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                        <div class="text">
                            <h2>$1,060,386</h2>
                            <span>Pembayaran</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <canvas id="widgetChart4"></canvas>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                    <a href="/pembayaran" class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi"></i>Detail
                    </a>
                </div>
        </div>
    </div>
@endsection