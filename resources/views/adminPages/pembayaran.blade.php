@extends('adminLayouts.admin')

@section('title', 'Data Pembayaran')

@section('content')
    <div class="row">
            <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Data Pembayaran</h3>
                    {{-- <h4 class="title-5">{{$pesanEmail}}</h4> --}}
                    {{-- <h4 class="title-4 m-b-35">{{$pesan}}</h4> --}}
                    <!-- DATA TABLE -->
                    <div class="table-responsive">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>id pembayaran</th>
                                    <th>id pemesanan</th>
                                    <th>nama pemesan</th>
                                    <th>nama guru</th>
                                    {{-- <th>email guru</th> --}}
                                    <th>jumlah pertemuan</th>
                                    <th>tanggal bayar</th>
                                    <th>tanggal verifikasi</th>
                                    <th>total pembayaran</th>
                                    <th>status</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($query as $q)                                    
                                <tr class="tr-shadow">
                                    {{-- <td>1</td> --}}
                                    <td>{{$q->id_pembayaran}}</td>
                                    <td>{{$q->id_pemesanan}}</td>
                                    <td>{{$q->nama_pemesan}}</td>
                                    <td>{{$q->nama_guru}}</td>
                                    {{-- <td>{{$q->email}}</td> --}}
                                    <td>{{$q->jumlah_pertemuan}}</td>
                                    <td>{{$q->tanggal_bayar}}</td>
                                    <td>{{$q->tanggal_verifikasi}}</td>
                                    <td>{{$q->total_pembayaran}}</td>
                                    <td>
                                        {{-- Status --}}
                                        @if ($q->status == 0)
                                            <label for="" class="badge badge-warning">Waiting</label>
                                            @elseif ($q->status == 1)
                                            <label for="" class="badge badge-success">Accepted</label>
                                            @elseif($q->status == 2)
                                            <label for="" class="badge badge-danger">Decline</label>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            @if ($q->status == 1)
                                                <a href="/sendEmail" class="item" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                </a>
                                                <a href="/pembayaran/approve/{{$q->id_pembayaran}}" class="item" data-toggle="tooltip" data-placement="top" title="Accept">
                                                    <i class="zmdi zmdi-check-circle"></i>
                                                </a>
                                                <a href="/pembayaran/decline/{{$q->id_pembayaran}}" class="item" data-toggle="tooltip" data-placement="top" title="Decline">
                                                    <i class="zmdi zmdi-minus-circle"></i>
                                                </a>
                                                @elseif($q->status == 2)
                                                    <a href="/pembayaran/approve/{{$q->id_pembayaran}}" class="item" data-toggle="tooltip" data-placement="top" title="Accept">
                                                        <i class="zmdi zmdi-check-circle"></i>
                                                    </a>
                                                    <a href="/pembayaran/decline/{{$q->id_pembayaran}}" class="item" data-toggle="tooltip" data-placement="top" title="Decline">
                                                        <i class="zmdi zmdi-minus-circle"></i>
                                                    </a>
                                            @endif
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