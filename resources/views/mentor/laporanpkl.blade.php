@extends('mentor.mentorLayout.mentor_design')
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
      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif
          <div class="col-12">
              <div class="card card-hover shadow-sm" style="border-radius: .40rem!important">
                  <div class="card-body">
                      <div class="table-responsive">
                          <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                              <div class="row">
                                  <div class="col-sm-12 col-md-6">
                                      <h5 class="card-title m-b-0">Data Laporan PKL</h5>
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
                                                          <a href="{{Storage::url($laporanpkls->laporan)}}" class="btn btn-primary btn-sm" target="_blank">Lihat</a>
                                                          {{csrf_field()}}
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
