@extends('adminLayouts.admin')

@section('title', 'Data Absensi')

@section('content')
    <div class="row">
            <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Data Absen</h3>
                    <!-- DATA TABLE -->
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>nama pemesan</th>
                                    <th>nama guru</th>
                                    <th>mata pelajaran</th>
                                    <th>tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($query as $q)
                                <tr class="tr-shadow">
                                    <td>{{$q->nama_pemesan}}</td>
                                    <td>{{$q->nama_guru}}</td>
                                    <td>{{$q->nama_mapel}}</td>
                                    <td>
                                        <span>{{$q->tanggal}}</span> 
                                    </td>
                                    {{-- <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Accept">
                                                <i class="zmdi zmdi-check-circle"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Decline">
                                                <i class="zmdi zmdi-minus-circle"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </div>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
    </div>
@endsection