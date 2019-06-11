@extends('layouts.master')
@section('title', 'Pendaftaran Guru')
@section('moreCss')
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    .main_menu .main-menu-item ul li .nav-link{
        /* color: #ffffff; */
        color: #333333;
    }
</style>
@endsection
@section('content')
    <!-- breadcrumb start-->
    {{-- <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Gabung bersama Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- breadcrumb end-->

    <!-- form start -->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section_tittle text-center">
                        <h2>Form Pendaftaran Guru</h2>
                    </div>
                    {{-- Belum ada notifikasi sukses registrasi --}}
                </div>
            </div>
            {{-- Multiple Form --}}
            <!-- multistep form -->
            <form id="regForm" class="mb-5" method="post" action="{{url('/registrasiGuru')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1>Register:</h1>
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <h3><b>Data Diri</b></h3>
                  <p class="mt-3">
                    <label>Nama:</label>  
                    <input type="text" class="@error('name') @enderror form-control" placeholder="Nama Lengkap Anda" oninput="this.className = ''" name="name">
                    </p>
                  <p class="mt-3">
                    <label>Email:</label>  
                    <input type="email" class="@error('email') @enderror form-control" placeholder="Email Anda" oninput="this.className = ''" name="email">
                    </p>
                  <p class="mt-3">
                    <label>Password:</label>    
                    <input type="password" class="@error('password') @enderror form-control" placeholder="Password Anda" oninput="this.className = ''" name="password">
                    </p>
                  <p class="mt-3">
                        <label>Nomor Handphone:</label>    
                    <input type="number" class="@error('no_handphone') @enderror form-control" placeholder="Nomor Aktif Handphone Anda" oninput="this.className = ''" name="no_handphone">
                    </p>
                  <p class="mt-3">
                    <label for="provinsi">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                  </p>
                  <p class="mt-3">
                        <label>Institusi/Universitas:</label>  
                    <input type="text" class="@error('institusi') @enderror form-control" placeholder="Anda adalah lulusan/kuliah di ..." oninput="this.className = ''" name="institusi">
                    </p>
                </div>
                <div class="tab">Alamat:
                  <p class="mt-3">
                    <label for="provinsi">Provinsi</label>
                    <select name="provinsi" id="provinsi" class="form-control provinsi">
                        <option>-- Pilih-Provinsi --</option>
                        @foreach ($provinsi as $p)
                            <option value="{{$p->id_provinsi}}">{{$p->provinsi}}</option>
                        @endforeach
                    </select>
                  </p>
                  <p class="mt-3">
                    <label for="kota">Kabupaten/Kota</label>
                    <select name="kab_kota" id="kab_kota" class="form-control kab_kota">
                        <option>-- Pilih-Kabupaten/Kota</option>
                        @foreach ($provKabot as $pbk)
                            <option value="{{$pbk->id}}">{{$pbk->kab_kota}}</option>
                        @endforeach 
                    </select>
                  </p>
                  <p class="mt-3"><input type="text" class="@error('address') @enderror form-control" id="inputAddress" placeholder="Alamat Lengkap Anda" oninput="this.className = ''" name="phone"></p>
                </div>
                <div class="tab">Kelengkapan Data Guru:
                  <p class="mt-3">
                    <label for="">Jenjang</label>
                    <select name="jenjang" id="jenjang" class="form-control jenjang">
                        <option value="">Pilih Jenjang</option>
                        @foreach ($jenjang as $j)
                        <option value="{{$j->id_jenjang}}"required>{{$j->jenjang}}</option>
                        @endforeach
                    </select>
                  </p>
                  <p class="mt-3">
                    <label for="">Mata Pelajaran</label>
                    <select name="mata_pelajaran" id="mata_pelajaran" class="@error('mata_pelajaran') @enderror form-control mata_pelajaran">
                        <option value="">Pilih mata Pelajaran</option>
                        @foreach ($mataPelajaran as $mp)
                        <option id="mata_pelajaran" value="{{$mp->id}}">{{$mp->nama_mapel}}</option>
                        @endforeach
                    </select>
                  </p>
                  <p class="mt-3">
                    <label for="exampleFormControlFile1">Upload CV</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <input type="file" class="@error('file') @enderror custom-file-input" name="file" id="exampleFormControlFile1" value="{{old('file')}}">
                    </div>
                  </p>
                </div>
                {{-- <div class="tab">Login Info:
                  <p class="mt-3"><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                  <p class="mt-3"><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                </div> --}}
                <div class="mt-3" style="overflow:auto;">
                  <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  {{-- <span class="step"></span> --}}
                </div>
              </form>
            {{-- End Multiple Form --}}
        </div>
    </section>
    <!-- form end -->
    {{-- Javascript --}}
    {{-- Multiple Form --}}
    <script type="text/javascript">
        var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
    </script>
    {{-- End Multiple Form --}}

    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
                jQuery('select[name="jenjang"]').on('change',function(){
                   var jenjangStr = jQuery(this).val();
                   if(jenjangStr)
                   {
                      $.ajax({
                         url : '/getMapel/' +jenjangStr,
                         type : "GET",
                         data : {"_token":"{{ csrf_token() }}"},
                         dataType : "json",
                         success:function(data)
                         {
                            console.log(data);
                            jQuery('select[name="mata_pelajaran"]').empty();
                            jQuery.each(data, function(key,value){
                               $('select[name="mata_pelajaran"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                         }
                      });
                   }
                   else
                   {
                      $('select[name="mata_pelajaran"]').empty();
                   }
                });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function ()
        {
                jQuery('select[name="provinsi"]').on('change',function(){
                   var provinsiStr = jQuery(this).val();
                   if(provinsiStr)
                   {
                      $.ajax({
                         url : '/getKabKota/' +provinsiStr,
                         type : "GET",
                         data : {"_token":"{{ csrf_token() }}"},
                         dataType : "json",
                         success:function(data)
                         {
                            console.log(data);
                            jQuery('select[name="kab_kota"]').empty();
                            jQuery.each(data, function(key,value){
                               $('select[name="kab_kota"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                         }
                      });
                   }
                   else
                   {
                      $('select[name="kab_kota"]').empty();
                   }
                });
        });
    </script>
        
@endsection