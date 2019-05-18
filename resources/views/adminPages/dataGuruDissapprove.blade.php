@extends('adminLayouts.admin')

@section('title', 'Data Guru Dissapprove and Trash')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">data guru dissapprove and trash</h3>
            {{-- <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add user</button>
                </div>
            </div> --}}
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>email</th>
                            <th>Bidang</th>
                            {{-- <th>Lulusan</th> --}}
                            <th>Cirruculum Vitae</th>
                            <th>status</th>
                            {{-- <th>Salary</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($query as $q)
                        <tr class="tr-shadow">
                            <td>
                                <span class="status--process">{{$q->name}}</span>
                            </td>
                            <td>
                                <span class="block-email">{{$q->email}}</span>
                            </td>
                            <td class="desc">
                                @foreach ($queryMapel as $qm)
                                    @if ($qm->id_guru == $q->id_guru)
                                        {{$qm->nama_mapel}}
                                    </br>
                                    @endif
                                @endforeach
                            </td>
                            {{-- <td>Masterchef</td> --}}
                            <td> <a class="btn btn-primary" href="{{ asset('/'. $q->direktori_cv) }}">Download</a> </td>
                            <td>

                                <span class="status--process">
                                    @if ($q -> status == 2)
                                        Dissapprove
                                        @else
                                        Trash
                                    @endif
                                </span>
                            </td>
                            {{-- <td>500k</td> --}}
                            <td>
                                <div class="table-data-feature">
                                    <a href="/dataGuru/approve/{{ $q->id_guru }}" class="item" data-toggle="tooltip" data-placement="top"
                                        title="Approve">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    {{-- <button class="item" data-toggle="tooltip" data-placement="top"
                                        title="Dissapprove">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button> --}}
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