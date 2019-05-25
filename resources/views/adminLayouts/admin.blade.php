<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('assets/img/icon/icon-maticeh.png')}}" type="image/x-icon">

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/admin">
                            <img src="{{ asset('assets/img/icon/logo-maticeh-mini.png') }}" alt="MATICEH" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            {{-- Navbar-mobile --}}
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                            <li class="">
                                <a class="" href="/admin">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-chart-bar"></i>Users
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="/dataGuru">Data Guru</a>
                                    </li>
                                    <li>
                                        <a href="/dataGuruApprove">Data Guru Approve</a>
                                    </li>
                                    <li>
                                        <a href="/dataGuru">Data Guru Dissapprove and Trash</a>
                                    </li>
                                    <li>
                                        <a href="/dataPemesan">Data Pemesan</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/pemesanan">
                                    <i class="fas fa-book"></i>Pemesanan</a>
                            </li>
                            <li>
                                <a href="/absensi">
                                    <i class="far fa-check-square"></i>Absensi</a>
                            </li>
                            <li>
                                <a href="/pembayaran">
                                    <i class="fas fa-calendar-alt"></i>Pembayaran</a>
                            </li>
                    </ul>
                </div>
            </nav>
                {{-- Navbar-mobile --}}
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/admin">
                    <img src="{{ asset('assets/img/icon/logo-maticeh.png') }}" alt="MATICEH" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="<?php 
                                if ($act == "dashboard") {
                                    echo "active";
                                }
                            ?>">
                            <a href="/admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub <?php 
                                if ($act == "active") {
                                    echo "active";
                                }
                            ?>">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Users</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="<?php 
                                if ($act == "dataGuru") {
                                    echo "active";
                                }
                            ?>">
                                    <a href="/dataGuru">Data Guru</a>
                                </li>
                                <li class="<?php 
                                if ($act == "dataGuruApprove") {
                                    echo "active";
                                }
                            ?>">
                                    <a href="/dataGuruApprove">Data Guru Approve</a>
                                </li>
                                <li class="<?php 
                                if ($act == "dataGuruDissapprove") {
                                    echo "active";
                                }
                            ?>">
                                    <a href="/dataGuruDissapprove">Data Guru Dissapprove and Trash</a>
                                </li>
                                <li class="<?php 
                                if ($act == "dataPemesan") {
                                    echo "active";
                                }
                            ?>">
                                    <a href="/dataPemesan">Data Pemesan</a>
                                </li>
                            </ul>
                        </li>
                    
                        <li class="<?php 
                        if ($act == "pemesanan") {
                            echo "active";
                        }
                    ?>">
                            <a href="/pemesanan">
                                <i class="fas fa-book"></i>Pemesanan</a>
                        </li>
                        <li class="<?php 
                        if ($act == "absensi") {
                            echo "active";
                        }
                    ?>">
                            <a href="/absensi">
                                <i class="far fa-check-square"></i>Absensi</a>
                        </li>
                        <li class="<?php 
                        if ($act == "pembayaran") {
                            echo "active";
                        }
                    ?>">
                            <a href="/pembayaran">
                                <i class="fas fa-calendar-alt"></i>Pembayaran</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"
                                    placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <img src="{{ asset('assets/img/icon/avatar-01.jpg') }}" alt="MRPY" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Muhammad Reza Pahlevi Y</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="Muhammad Reza Pahlevi Y" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Muhammad Reza Pahlevi Y</a>
                                                    </h5>
                                                    <span class="email">muhammad.reza.pahlevi.y@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        {{-- Content --}}
                        @yield('content')
                        {{-- /content --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright mb-5">
                                    <p>Copyright &copy; 2019 MATICEH. All rights reserved. <a
                                            href="/">MATICEH</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('assets/js/mainAdmin.js') }}"></script>

</body>

</html>
<!-- end document-->