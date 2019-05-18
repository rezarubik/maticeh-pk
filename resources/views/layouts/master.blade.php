<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="#">
    <link rel="shortcut icon" href="{{asset('assets/img/icon/icon-maticeh.png')}}" type="image/x-icon">
    <link rel="stylesheet" style="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" style="text/css" href="{{asset('assets/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" style="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" style="text/css" href="{{asset('assets/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" style="text/css" href="{{asset('assets/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" style="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" style="text/css" href="{{asset('assets/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" style="text/css" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    {{-- Navbar --}}
    <!--::header part start::-->
    <header class="main_menu home_menu">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="index.html"> <img src="{{asset('assets/img/icon/logo-maticeh-mini.png')}}" alt="MATICEH"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse main-menu-item justify-content-end"
                          id="navbarSupportedContent">
                          <ul class="navbar-nav align-items-center">
                              <li class="nav-item">
                                  <a class="nav-link" href="bantuan.html">Bantuan</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="Layanan.html">Layanan</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="kontak.html">Kontak</a>
                              </li>
                              <li class="d-none d-lg-block">
                                  <a class="btn_1" href="/registrasi">Gabung</a>
                              </li>
                          </ul>
                      </div>
                  </nav>
              </div>
          </div>
      </div>
     </header>
  <!-- Header part end-->


    {{-- End Navbar --}}

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

    {{-- Footer --}}
    <!-- footer part start-->
    <footer class="footer-area">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-sm-6 col-md-4 col-xl-3">
                  <div class="single-footer-widget footer_1">
                      <p>MATICEH</p>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="single-footer-widget footer_2">
                      <h4>Newsletter</h4>
                      <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                      </p>
                      <form action="#">
                          <div class="form-group">
                              <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder='Enter email address'
                                      onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = 'Enter email address'">
                                  <div class="input-group-append">
                                      <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                  </div>
                              </div>
                          </div>
                      </form>
                      <div class="social_icon">
                          <a href="#"> <i class="ti-facebook"></i> </a>
                          <a href="#"> <i class="ti-twitter-alt"></i> </a>
                          <a href="#"> <i class="ti-instagram"></i> </a>
                          <a href="#"> <i class="ti-skype"></i> </a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-md-4">
                  <div class="single-footer-widget footer_2">
                      <h4>Contact us</h4>
                      <div class="contact_info">
                          <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                          <p><span> Phone :</span> +2 36 265 (8060)</p>
                          <p><span> Email : </span>info@gmail.com </p>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="copyright_part_text text-center">
                      <div class="row">
                          <div class="col-lg-12">
                              <p class="footer-text m-0"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer part end-->

    {{-- End Footer --}}
    
</body>
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
{{-- <script src="{{asset('assets/js/jquery-3.3.1.slim.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/bootstrap.js')}}"></script> --}}
<!-- jquery plugins here-->
<!-- jquery -->
{{-- <script src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script> --}}
    <!-- popper js -->
{{-- <script src="{{asset('assets/js/popper.min.js')}}"></script> --}}
    <!-- bootstrap js -->
{{-- <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}
    <!-- easing js -->
{{-- <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script> --}}
    <!-- swiper js -->
{{-- <script src="{{asset('assets/js/swiper.min.js')}}"></script> --}}
    <!-- swiper js -->
{{-- <script src="{{asset('assets/js/masonry.pkgd.js')}}"></script> --}}
    <!-- particles js -->
{{-- <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script> --}}
    <!-- swiper js -->
{{-- <script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script> --}}
    <!-- custom js -->
{{-- <script src="{{asset('assets/js/custom.js')}}"></script> --}}
{{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> --}}
</html>