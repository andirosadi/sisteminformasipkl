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

        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
    <div class="row" >
        <!-- Peserta PKL -->
        <div class="col-md-6 col-lg-4 col-xlg-">
            <div class="card card-hover" style="background-color: transparent">
                <div class="box bg-warning text-center" style="border-radius:.40rem!important">
                    <h1 class="font-light text-white"><i class="mdi mdi-account-check"></i></h1>
                    <h6 class="text-white">Peserta PKL, {{Auth::guard('pendaftar')->user()->name}}</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <!-- Agenda -->
            <div class="accordion" >
                <div class="shadow-sm card card-hover" style="border-radius:.40rem!important;">
                    <div class="card-header" style="border-top-left-radius:.40rem!important; border-top-right-radius:.40rem!important; background-color: #da542e">
                        <h5 class="mb-0" style="color: white">
                            <a data-toggle="collapse" aria-expanded="true" >
                                <i class="m-r-5 mdi mdi-calendar-multiple" aria-hidden="true"></i>
                                <span>Events</span>
                            </a>
                        </h5>
                    </div>
                    <div class="collapse show" aria-labelledby="collapseOne" data-parent="#accordionExample">
                        <ul class="list-style-none scrollable " style="max-height: 64vh">
                            @foreach($event as $events)
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">{{$events->agenda}}</a>
                                        <span class="text-muted"><i class="m-r-5 mdi mdi-calendar"></i>{{\Carbon\Carbon::parse($events->tanggal)->format('j F Y')}}</span><br>
                                        <span class="text-muted"><i class="m-r-5 mdi mdi-clock"></i>1{{\Carbon\Carbon::parse($events->tanggal)->format('g:i A')}}</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            @if ($events->priority == 1)
                                                <badge class="badge badge-danger">High Priority</badge>
                                            @elseif($events->priority == 2)
                                                <badge class="badge badge-warning">Medium Priority</badge>
                                            @else
                                                <badge class="badge badge-info">No Priority</badge>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Logbook Updates -->
            <div class="accordion" id="accordionExample" >
                <div class="shadow-sm card card-hover" style="border-radius:.40rem!important">
                    <div class="card-header" id="headingOne" style="border-top-left-radius:.40rem!important; border-top-right-radius:.40rem!important; background-color: #7460ee">
                        <h5 class="mb-0" style="color: white">
                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="m-r-5 mdi mdi-file-check" aria-hidden="true"></i>
                                <span>Logbook Updates</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <ul class="list-style-none scrollable ">
                            @foreach($logbookpeserta as $logbookpesertas)
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a class="m-b-0 font-medium p-0">Uraian: {{$logbookpesertas->uraian}}</a>
                                        <span class="text-muted"><i class="m-r-5 mdi mdi-calendar"></i>{{\Carbon\Carbon::parse($logbookpesertas->tanggal)->format('j F Y')}}</span><br>
                                        <span class="text-muted"><i class="m-r-5 mdi mdi-map-marker"></i>{{$logbookpesertas->lokasi}}</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            @if ($logbookpesertas->status == 0)
                                            <badge class="badge badge-warning">
                                                    Belum Disetujui
                                            </badge>
                                            @elseif($logbookpesertas->status == 2)
                                                <badge class="badge badge-danger">
                                                    Ditolak
                                                </badge>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Nilai -->
            <div class="shadow-sm card card-hover" style="border-radius:.40rem!important">
                <div class="card-body">
                    <h4 class="card-title m-b-0" >
                        <i class="m-r-5 mdi mdi-counter" aria-hidden="true"></i>
                        Nilai Updates
                    </h4>
                </div>
                <ul class="list-style-none scrollable" >
                    @foreach($nilai as $nilais)
                        @if($nilais == null)
                            <li class="d-flex no-block card-body border-top">
                                <div>
                                    <a class="m-b-0 font-medium p-0">Nilai belum terbit</a>
                                </div>
                            </li>
                        @else
                    <li class="d-flex no-block card-body border-top">
                        <div>
                            <a href="{{url('nilai/index')}}" class="m-b-0 font-medium p-0">Nilai {{$nilais->name}} sudah terbit</a>
                            <span class="text-muted"><i class="m-r-5 mdi mdi-calendar"></i>{{\Carbon\Carbon::parse($nilais->created_at)->diffForHumans()}}</span>
                        </div>
                    </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
@endsection
