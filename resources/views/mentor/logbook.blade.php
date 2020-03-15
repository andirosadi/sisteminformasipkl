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
        <div class="card shadow-sm" style="border-radius: 10px!important">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h5 class="card-title m-b-0">Log Book Harian </h5>
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
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">Kegiatan yang dilakukan</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <tr>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach($logbook as $logbooks)
                                            <th scope="row">{{$no++}}</th>
                                            <td>{{\Carbon\Carbon::parse($logbooks->tanggal)->format('d F Y')}}</td>
                                            <td>{{$logbooks->lokasi}}</td>
                                            <td>{{$logbooks->uraian}}</td>
                                            <td>
                                                @if($logbooks->status == 1)
                                                    <i class="mdi mdi-check-circle" style="color: mediumseagreen">Disetujui</i>
                                                    @elseif($logbooks->status == 2)
                                                        <i class="mdi mdi-close-circle" style="color: red">Ditolak</i>
                                                        @else
                                                        <i class="mdi mdi-clock" style="color: orange">Menunggu Persetujuan Mentor</i>
                                                        @endif
                                            </td>
                                            <td>
                                                <div class="card-title m-b-0">
                                                    <form action="" method="post">
                                                        <div class="btn-group btn-group-justified">
                                                            <a href="{{route('m_logbook.edit', $logbooks->id)}}" class="btn btn-primary btn-sm">Ubah status</a>
                                                            {{csrf_field()}}
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
