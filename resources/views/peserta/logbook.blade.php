@extends('peserta.pesertaLayout.peserta_design')
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
    <div class="row" >
        <!-- Peserta PKL -->
        <div class="col-md-6 col-lg-12 col-xlg-">
            <div class="card card-hover" style="background-color: transparent">
                <div class="box bg-warning text-center" style="border-radius:.40rem!important">
                    <h1 class="font-light text-white"><i class="mdi mdi-file-check"></i></h1>
                    <h5 class="text-white">Data Logbook</h5>
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
              <div class="card shadow-sm card-hover" style="border-radius:.40rem!important">
                  <div class="card-body">
                      <div class="table-responsive">
                          <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                              <div class="row">
                                  <div class="col-sm-12 col-md-6">
                                      <a type="" href="{{route('logbook.create')}}" class="btn btn-success btn-sm">Buat Log Book</a>
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
                                              <th scope="col"><b>Tanggal</b></th>
                                              <th scope="col"><b>Lokasi</b></th>
                                              <th scope="col"><b>Kegiatan yang dilakukan</b></th>
                                              <th scope="col"><b>Status</b></th>
                                              <th scope="col"><b>Action</b></th>
                                          </tr>
                                          </thead>
                                          <tbody id="myTable">
                                          <tr>
                                              @php
                                                  $no = 1;
                                              @endphp
                                              @foreach($logbookpeserta as $pesertalogbook)
                                                  <th scope="row">{{$no++}}</th>
                                                  <td>{{\Carbon\Carbon::parse($pesertalogbook->tanggal)->format('d F Y')}}</td>
                                                  <td>{{$pesertalogbook->lokasi}}</td>
                                                  <td>{{$pesertalogbook->uraian}}</td>
                                                  <td>
                                                      @if($pesertalogbook->status == 1)
                                                          <i class="mdi mdi-check-circle" style="color: mediumseagreen">Disetujui</i>
                                                      @elseif($pesertalogbook->status == 2)
                                                          <i class="mdi mdi-close-circle" style="color: red">Ditolak</i>
                                                      @else
                                                          <i class="mdi mdi-clock" style="color: orange">Menunggu Persetujuan Mentor</i>
                                                      @endif
                                                  </td>
                                                  <td>
                                                      <div class="card-title m-b-0">
                                                          <form action="{{url('logbook/'.$pesertalogbook->id)}}" method="post">
                                                              @if($pesertalogbook->status == 1)
                                                                  <div class="btn-group btn-group-justified">
                                                                      <a href="{{url('logbook/'.$pesertalogbook->id).'/edit'}}" class="btn btn-warning btn-sm disabled">Edit</a>
                                                                      {{csrf_field()}}
                                                                      {{method_field('DELETE')}}
                                                                      <button disabled="disabled" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus logbook?');" >Delete</button>
                                                                  </div>
                                                              @elseif($pesertalogbook->status == 2)
                                                                  <div class="btn-group btn-group-justified">
                                                                      <a href="{{url('logbook/'.$pesertalogbook->id).'/edit'}}"  class="btn btn-warning btn-sm disabled">Edit</a>
                                                                      {{csrf_field()}}
                                                                      {{method_field('DELETE')}}
                                                                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus logbook?');" >Delete</button>
                                                                  </div>
                                                              @else
                                                                  <div class="btn-group btn-group-justified">
                                                                      <a href="{{url('logbook/'.$pesertalogbook->id).'/edit'}}" class="btn btn-warning btn-sm">Edit</a>
                                                                      {{csrf_field()}}
                                                                      {{method_field('DELETE')}}
                                                                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus logbook?');" >Delete</button>
                                                                  </div>
                                                              @endif
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
