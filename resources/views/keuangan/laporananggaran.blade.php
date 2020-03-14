@extends('keuangan.keuanganLayout.keuangan_design')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-12 col-xlg-3">
            <div class="card card-hover" style="background-color: transparent">
                <div class="box bg-primary text-center" style="border-radius:.40rem!important">
                    <h1 class="font-light text-white"><i class="mdi mdi-cash-usd"></i></h1>
                    <h5 class="text-white">Data Anggaran PKL</h5>
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
              <div class="card card-hover shadow-sm" style="border-radius:.40rem!important">
                  <div class="card-body">
                      <div class="table-responsive">
                          <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                              <div class="row">
                                  <div class="col-sm-12 col-md-6">
                                      <h5 class="card-title m-b-0">Data Anggaran PKL</h5>
                                  </div>
                                  <div class="col-sm-12 col-md-6">
                                      <div id="zero_config_filter" class="dataTables_filter">
                                          <input id="myInput" type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="zero_config">
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
                                              <th scope="col"><b>Anggaran</b></th>
                                              <th scope="col"><b>Diajukan Pada</b></th>
                                              <th scope="col"><b>Status</b></th>
                                              <th scope="col"><b>Action</b></th>
                                          </tr>
                                          </thead>
                                          <tbody id="myTable">
                                          <tr>
                                              @php
                                                  $no = 1;
                                              @endphp
                                              {{--@foreach($inovasi as $data)--}}
                                              {{--                                      @foreach($lihatlaporan as $key => $lihatlaporans)--}}
                                              @foreach($files as $file)
                                                  <th scope="row">{{$no++}}</th>
                                                  <td>{{$file->judul}}</td>
                                                  <td>{{$file->laporananggaran}}</td>
                                                  <td>{{\Carbon\Carbon::parse($file->created_at)->format('d F Y')}}</td>
                                                  <td>
                                                      @if($file->status_id == 1)
                                                          <i class="mdi mdi-check-circle" style="color: mediumseagreen">Disetujui</i>
                                                      @elseif($file->status_id == 2)
                                                          <i class="mdi mdi-clock" style="color: orange">Belum Disetujui</i>
                                                      @endif
                                                  </td>
                                                  <td>
                                                      <div class="card-title m-b-0">
                                                          <div class="btn-group btn-group-vertical">
                                                          <a type="" href="{{Storage::url($file->laporananggaran)}}" class="btn btn-info btn-sm" target="_blank">Lihat</a>
                                                          <a type="" href="{{url('k_anggaran/'.$file->id).'/edit'}}" class="btn btn-warning btn-sm">Ubah status</a>
                                                          {{csrf_field()}}
                                                          </div>
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
