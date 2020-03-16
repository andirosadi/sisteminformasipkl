@extends('peserta.pesertaLayout.peserta_design')
@section('content')
<div class="row">
    <!-- Laporan PKL -->
    <div class="col-md-6 col-lg-12 col-xlg-">
        <div class="card card-hover" style="background-color: transparent">
            <div class="box bg-primary text-center" style="border-radius:10px!important">
                <h1 class="font-light text-white"><i class="mdi mdi-file-multiple"></i></h1>
                <h5 class="text-white">Data Laporan</h5>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="col-12">
        <div class="card shadow-sm" style="border-radius:10px!important">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <a type="" href="{{route('laporanpkl.form')}}" class="btn btn-success btn-sm">Buat Laporan PKL</a>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="zero_config_filter" class="dataTables_filter">
                                    <input id="myInput" type="search" class="form-control form-control-sm" placeholder="search..." aria-controls="zero_config">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><b>No</b></th>
                                            <th scope="col"><b>Judul</b></th>
                                            <th scope="col"><b>Laporan</b></th>
                                            <th scope="col"><b>Dibuat Pada</b></th>
                                            <th scope="col"><b>Action</b></th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <tr>
                                            @php
                                            $no = 1;
                                            @endphp
                                            {{--@foreach($inovasi as $data)--}}
                                            @foreach($laporanpkl as $laporanpkls)
                                            <th scope="row">{{$no++}}</th>
                                            <td>{{$laporanpkls->judul}}</td>
                                            <td>{{$laporanpkls->laporan}}</td>
                                            <td>{{\Carbon\Carbon::parse($laporanpkls->created_at)->format('d F Y')}}</td>
                                            <td>
                                                <div class="card-title m-b-0">
                                                    <form action="{{url('lihatlaporan/'.$laporanpkls->id)}}" method="post">
                                                        <div class="btn-group btn-group-justified btn-group-vertical">
                                                            <a type="" href="{{Storage::url($laporanpkls->laporan)}}" class="btn btn-info btn-sm" target="_blank">Lihat</a>
                                                            <a type="" href="{{url('lihatlaporan/'.$laporanpkls->id).'/edit'}}" class="btn btn-warning btn-sm">Edit</a>
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus Laporan PKL?');">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<!-- START SCRIPTS -->
<!-- START PLUGINS -->

<!-- END TEMPLATE -->
<!-- END SCRIPTS -->
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->

@endsection
