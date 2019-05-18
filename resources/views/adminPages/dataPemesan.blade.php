@extends('adminLayouts.admin')

@section('title', 'Data Pemesan')

@section('content')
    <div class="row">
            <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Data Pemesan</h3>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>no hp</th>
                                    <th>alamat</th>
                                    <th>created_at</th>
                                    {{-- <th></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($query as $q)                                    
                                <tr class="tr-shadow">
                                    <td>{{$q->name}}</td>
                                    <td>
                                        <span class="block-email">{{$q->email}}</span>
                                    </td>
                                    <td class="desc">{{$q->no_hp}}</td>
                                    <td>{{$q->alamat}}</td>
                                    <td>{{$q->created_at}}</td>
                                    {{-- <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
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