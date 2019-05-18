@extends('adminLayouts.admin')

@section('title', 'Data Pemesanan')

@section('content')
<div class="row">
        <div class="col-md-12">
                <h3 class="title-5 m-b-35">Data Pemesanan</h3>
                    <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                            <tr>
                                <th>nama pemesan</th>
                                <th>nama guru</th>
                                <th>alamat pemesan</th>
                                <th>status</th>
                            </tr>
                    </thead>
                            <tbody>
                                @foreach ($query as $q)
                                <tr class="tr-shadow">
                                <td>{{$q->nama_pemesan}}</td>
                                <td>{{$q->nama_guru}}</td>
                                <td>{{$q->alamat_pemesan}}</td>
                                    <td>
                                        <span class="status--process">
                                            @if ($q->status == 0)
                                            <label for="" class="badge badge-pill badge-primary">Waiting</label>
                                                @elseif ($q->status == 1)
                                                    <label for="" class="badge badge-pill badge-success">Accepted</label>    
                                                @elseif ($q->status == 2)
                                                <label for="" class="badge badge-pill badge-danger">Declined</label>
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        {{-- <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Accept">
                                                <i class="zmdi zmdi-check-circle"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Decline">
                                                <i class="zmdi zmdi-minus-circle"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                        </div> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
    </div>
@endsection