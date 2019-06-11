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
    <section class="special_cource pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Temukan Jawaban Anda</h2>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Apa saja syarat menjadi guru di Maticeh?</a>
                </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                Siapapun dapat mendaftar menjadi guru di Maticeh, tidak terbatas pada lokasi tempat tinggal, latar belakang, ataupun usia. Pendaftaran terbuka selama Anda memiliki keahlian yang dapat diajarkan. Perlu diketahui bahwa Ruangguru menerapkan sistem verifikasi identitas berdasarkan Kartu Tanda Penduduk (KTP) dan verifikasi Pendidikan Terakhir berdasarkan Ijazah/ Sertifikat Keahlian yang setara.
                </div>
                </div>
                </div>
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Bagaimana cara mendaftar sebagai guru di Maticeh?</a>
                </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                Untuk mendaftar sebagai guru di Maticeh, pengguna perlu membuat akun profil dengan melakukan langkah-langkah berikut:<br>
                1. Melakukan pendaftaran dengan klik “Gabung” pada bagian kanan atas halaman utama website Maticeh.<br>
                2. Mengisi formulir pendaftaran.
                </div>
                </div>
                </div>
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Bagaimana sistem pembayaran guru di Maticeh?</a>
                </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                1. Pembayaran guru akan diproses 50% setelah pertemuan pertama (setelah ada konfirmasi kecocokan oleh murid) dan 50% setelah pertemuan terakhir.<br>
                2 Pembayaran guru baru bisa diproses setelah guru mengirim laporan pembelajaran dan absensi belajar.<br>
                3. Apabila setelah pertemuan pertama murid konfirmasi ketidakcocokan belajar, maka Maticeh tetap akan memproses pembayaran untuk guru selama 1 pertemuan tersebut.
                </div>
                </div>
                </div>
                </div>
                </div>
        </div>
    </section>
    <!--review_part end-->
@endsection