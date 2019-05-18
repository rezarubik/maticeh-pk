@extends('adminLayouts.admin')

@section('title', 'Data Pembayaran')

@section('content')
    <div class="row">
            <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Data Pembayaran</h3>
                    <!-- DATA TABLE -->
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>id pembayaran</th>
                                    <th>id pemesan</th>
                                    <th>Nama</th>
                                    <th>link bukti pembayaran</th>
                                    <th>status</th>
                                    <th>tanggal bayar</th>
                                    <th>tanggal diverifikasi</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($query as $q)                                    
                                <tr class="tr-shadow">
                                    {{-- <td>1</td> --}}
                                    <td>{{$q->id}}</td>
                                    <td>{{$q->id_pemesan}}</td>
                                    <td>{{$q->name}}</td>
                                    <td>
                                        <span>{{$q->link}}</span>
                                    </td>
                                    <td>
                                        @if ($q->status == 0)
                                            <label for="" class="badge badge-warning">Waiting</label>
                                            @elseif ($q->status == 1)
                                            <label for="" class="badge badge-warning">Accepted</label>
                                            @elseif($q->status == 2)
                                            <label for="" class="badge badge-warning">Invalid</label>
                                        @endif
                                        {{-- <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Accept">
                                                <i class="zmdi zmdi-check-circle"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Decline">
                                                 <i class="zmdi zmdi-close-circle"></i>
                                            </button>
                                        </div> --}}
                                    </td>
                                    <td>
                                        <span class="date">{{$q->tgl_bayar}}</span>
                                    </td>
                                    <td>
                                        <span class="date">{{$q->tgl_verifikasi}}</span>
                                    </td>
                                    <td>
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