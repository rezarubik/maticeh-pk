@extends('layouts.master')
@section('title', 'Pendaftaran Guru')
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
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
    </section>
    <!-- breadcrumb end-->

    <!-- form start -->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Form Pendaftaran</h2>
                    </div>
                </div>
            </div>
            {{-- Menampilkan error validasi --}}
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            {{-- @else
            <div class="alert alert-success">
                <label class="badge badge-success" for="">Data Anda berhasil ditambahkan!</label>
            </div> --}}
        @endif
            {{-- Start Form --}}
            <form action="{{url('/registrasiGuru')}}" method="post" enctype="multipart/form-data">
                {{-- @csrf --}}
                 {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Nama Anda</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}" required>
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                    </div> --}}
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="{{old('email')}}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="{{old('password')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Alamat</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Your address" name="address" value="{{old('address')}}" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Provinsi</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Provinsi tempat tinggal Anda" name="provinsi" value="{{old('provinsi')}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Kabupaten/Kota</label>
                        <input type="text" class="form-control" id="inputState" placeholder="Kabupaten/Kota tempat tinggal Anda" name="kabupatenKota" value="{{old('kabupaten/kota')}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Nomor Handphone</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="Nomor handphone aktif" name="no_handphone" value="{{old('no_handphone')}}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Institusi/Universitas</label>
                        <input type="text" class="form-control" placeholder="Anda adalah lulusan..." name="institusi" value="{{old('institusi')}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Mata Pelajaran Yang Di Ampu</label>
                        <input type="text" class="form-control" placeholder="Anda dapat mengajar apa saja?" required name="mapel_guru" value="{{old('mapel_guru')}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Your CV Here</label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" value="{{old('file')}}">
                </div> --}}
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload CV</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <input type="file" class="custom-file-input" name="file" id="exampleFormControlFile1" required value="{{old('file')}}">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm btn_1">Join</button>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Gabung</button> -->
        </div>
        </form>
        </div>
    </section>
    <!-- form end -->
@endsection