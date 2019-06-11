@extends('layouts.master')
@section('title', 'Pendaftaran Guru')
@section('moreCss')
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
            {{-- Start Form --}}             
            <form action="{{url('/registrasiGuru')}}" method="post" enctype="multipart/form-data">
                {{-- @csrf --}}
                 {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Nama Anda</label>
                        <input type="text" class="@error('name') @enderror form-control" placeholder="Your Name" name="name" value="{{old('name')}}"required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="@error('email') @enderror form-control" id="inputEmail4" placeholder="Email" name="email" value="{{old('email')}}"required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="@error('password') @enderror form-control" id="inputPassword4" placeholder="Password" name="password" value="{{old('password')}}"required>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Alamat</label>
                    <input type="text" class="@error('address') @enderror form-control" id="inputAddress" placeholder="Your address" name="address" value="{{old('address')}}"required>
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="provinsi">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control provinsi">
                            <option>-- Pilih-Provinsi --</option>
                            @foreach ($provinsi as $p)
                                <option value="{{$p->id_provinsi}}">{{$p->provinsi}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="@error('provinsi') @enderror form-control" id="provinsi" placeholder="Provinsi tempat tinggal Anda" name="provinsi" value="{{old('provinsi')}}"required> --}}
                        @error('provinsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kota">Kabupaten/Kota</label>
                        <select name="kab_kota" id="kab_kota" class="form-control kab_kota">
                            <option>-- Pilih-Kabupaten/Kota</option>   
                            @foreach ($provKabot as $pbk)
                                <option value="{{$pbk->id}}">{{$pbk->kab_kota}}</option>
                            @endforeach 
                        </select>
                        {{-- <input type="text" class="@error('kabupatenKota') @enderror form-control" id="kabupatenKota" placeholder="Provinsi tempat tinggal Anda" name="kabupatenKota" value="{{old('kabupatenKota')}}"required> --}}
                        @error('kab_kota')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Nomor Handphone</label>
                        <input type="text" class="@error('no_handphone') @enderror form-control" id="inputZip" placeholder="Nomor handphone aktif" name="no_handphone" value="{{old('no_handphone')}}"required>
                        @error('no_handphone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Mata Pelajaran --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Jenjang</label>
                        <select name="jenjang" id="jenjang" class="form-control jenjang">
                            <option value="">Pilih Jenjang</option>
                            @foreach ($jenjang as $j)
                            <option value="{{$j->id_jenjang}}"required>{{$j->jenjang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Mata Pelajaran</label>
                        <select name="mata_pelajaran" id="mata_pelajaran" class="@error('mata_pelajaran') @enderror form-control mata_pelajaran">
                            <option value="">Pilih mata Pelajaran</option>
                            @foreach ($mataPelajaran as $mp)
                                <option id="mata_pelajaran" value="{{$mp->id}}"required>{{$mp->nama_mapel}}</option>
                            @endforeach
                            {{-- <option value="IPA SD">IPA SD</option>
                            <option value="IPS SD">IPS SD</option> --}}
                        </select>
                        @error('mata_pelajaran')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Institusi/Universitas</label>
                        <input type="text" class="@error('institusi') @enderror form-control" placeholder="Anda adalah lulusan..." name="institusi" value="{{old('institusi')}}"required>
                        @error('institusi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-group col-md-4">
                        <label for="">Mata Pelajaran Yang Di Ampu</label>
                        <input type="text" class="@error('mapel_guru') @enderror form-control" placeholder="Anda dapat mengajar apa saja?" name="mapel_guru" value="{{old('mapel_guru')}}"required>
                        @error('mapel_guru')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Your CV Here</label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" value="{{old('file')}}"required>
                </div> --}}
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload CV</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <input type="file" class="@error('file') @enderror custom-file-input" name="file" id="exampleFormControlFile1" value="{{old('file')}}" required>
                    </div>
                    @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <button type="submit" onclick="notification()" class="button button-contactForm btn_1">Join</button>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Gabung</button> -->
        </div>
        </form>
        </div>
    </section>
    <!-- form end -->
    {{-- Javascript --}}
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