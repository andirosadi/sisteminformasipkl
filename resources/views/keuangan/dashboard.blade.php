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

<!-- ============================================================== -->
<!-- Sales Cards  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <!-- Keuangan -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover" style="background-color: transparent">
                    <div class="box bg-primary text-center" style="border-radius:10px!important">
                        <h1 class="font-light text-white"><i class="mdi mdi-cash-usd"></i></h1>
                        <h6 class="text-white">Admin, {{ Auth::user()->name }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if (session('message'))
        <div class="col-md-3 col-sm-12">
            <div class="alert alert-success">
                <i class="m-r-5 mdi mdi-calendar-multiple"></i>{{ session('message') }}
            </div>
        </div>
        @endif
    </div>
    <div class="col-lg-4">
        <!-- Anggaran Updates -->
        <div class="accordion" id="accordionExample">
            <div class="shadow-sm card m-b-0" style="border-radius:10px!important">
                <div class="card-header" id="headingOne" style="border-top-left-radius:10px!important; border-top-right-radius:10px!important;background-color: #7460ee">
                    <h5 class="mb-0" style="color: white">
                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="m-r-5 mdi mdi-book-open-page-variant" aria-hidden="true"></i>
                            <span>Anggaran Updates</span>
                        </a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <ul class="list-style-none scrollable " style="max-height: 57vh">
                        @foreach($anggarankeuangan as $anggarans)
                        <li class="d-flex no-block card-body border-top" style="text-transform: capitalize">
                            <i class="fa fa-check-circle w-30px m-t-5"></i>
                            <div>
                                <a href="#" class="m-b-0 font-medium p-0">{{$anggarans->judul}}</a>
                                <span class="text-muted">Periode {{\Carbon\Carbon::parse($anggarans->created_at)->format('F Y')}}</span>
                                <br>
                                <badge class="badge badge-warning text-white">{{$anggarans->status_kuota}}</badge>
                            </div>
                            <div class="ml-auto">
                                <div class="tetx-right">
                                    <span class="text-muted">{{\Carbon\Carbon::parse($anggarans->updated_at)->diffForHumans()}}</span>
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
        <!-- Agenda -->
        <div class="accordion">
            <div class="shadow-sm card" style="border-radius:10px!important;">
                <div class="card-header" style="border-top-left-radius:10px!important; border-top-right-radius:10px!important; background-color: #da542e ">
                    <h5 class="mb-0" style="color: white">
                        <a data-toggle="collapse" aria-expanded="true">
                            <span>Events</span>
                            <i data-toggle="modal" data-target="#exampleModalCenter" class="m-r-5 mdi mdi-calendar-plus float-right" aria-hidden="true"></i>
                        </a>
                    </h5>
                </div>
                <div class="collapse show" aria-labelledby="collapseOne" data-parent="#accordionExample">
                    <ul class="list-style-none scrollable " style="max-height: 64vh">
                        @if(count($eventkeuangan) == null)
                        <li class="d-flex no-block card-body border-top">
                            <div>
                                <a class="m-b-0 font-medium p-0">Tidak ada event</a>
                            </div>
                        </li>
                        @else
                        @foreach($eventkeuangan as $events)
                        <li class="d-flex no-block card-body border-top">
                            <i class="fa fa-check-circle w-30px m-t-5"></i>
                            <div>
                                <a href="#" class="m-b-0 font-medium p-0">{{$events->agenda}}</a>
                                <span class="text-muted"><i class="m-r-5 mdi mdi-map-marker"></i>{{$events->lokasi}}</span><br>
                                <span class="text-muted"><i class="m-r-5 mdi mdi-calendar"></i>{{\Carbon\Carbon::parse($events->tanggal)->format('j F Y')}}</span><br>
                                <span class="text-muted"><i class="m-r-5 mdi mdi-clock"></i>{{\Carbon\Carbon::parse($events->tanggal)->format('H:i A')}}</span><br>
                                @if ($events->priority == 1)
                                <badge class="badge badge-danger">High Priority</badge>
                                @elseif($events->priority == 2)
                                    <badge class="badge badge-warning">Medium Priority</badge>
                                    @else
                                    <badge class="badge badge-info">No Priority</badge>
                                    @endif
                            </div>
                            <div class="ml-auto">
                                <div class="tetx-right">
                                    <form action="{{url('event/'.$events->id)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Apakah agenda telah terlaksana?');">Done</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tambah Agenda -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #da542e">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">
                    <i class="m-r-5 mdi mdi-calendar-multiple"></i>Tambah Agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('event.store')}}" method="post">{{csrf_field()}}
                <div class="modal-body">
                    <label for="lokasi">Lokasi</label>
                    <input id="lokasi" name="lokasi" type="text" class="required form-control">
                    <label class="m-t-15">Tanggal dan Waktu</label>
                    <div class="input-group">
                        <input type="text" name="tanggal" class="form-control" id="datetimepicker-autoclose" placeholder="YYYY / mm /dd HH:mm">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                    <label for="agenda">Agenda</label>
                    <input id="agenda" name="agenda" type="text" class="required form-control">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Prioritas</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="priority">
                            <option value="1">High Priority</option>
                            <option value="2">Medium Priority</option>
                            <option value="3">No Priority</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="m-r-5 mdi mdi-calendar-multiple"></i>Buat Agenda</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
