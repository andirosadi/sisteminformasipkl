@extends('admin.adminLayout.admin_design')
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
            <div class="box bg-info text-center" style="border-radius:10px!important">
                <h1 class="font-light text-white"><i class="mdi mdi-credit-card-multiple"></i></h1>
                <h5 class="text-white">Data Kuota</h5>
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
                                <a href="{{route('a_kuota.create')}}" class="btn btn-success btn-sm">Ajukan Kuota</a>
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
                                            <th scope="col"><b>NO</b></th>
                                            <th scope="col"><b>Divisi</b></th>
                                            <th scope="col"><b>Total Kuota</b></th>
                                            <th scope="col"><b>Diajukan Pada</b></th>
                                            <th scope="col"><b>Status</b></th>
                                            <th scope="col"><b>Action</b>
                                                {{--<!-- <a href="{{route('admin.create')}}" class="btn btn-primary">Create</a> -->--}}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @if(count($admin) != 0)
                                        @foreach($admin as $key => $user)
                                        <tr>
                                            <th scope="row"><b>{{$key+1}}</b></th>
                                            <td>{{$user->namadivisi}}</td>
                                            <td>{{$user->jumlahkuota}} Peserta</td>
                                            <td>{{\Carbon\Carbon::parse($user->created_at)->format('d F Y')}}</td>
                                            <td>
                                                @if($user->statuskuota_id == 1)
                                                    <i class="mdi mdi-check-circle" style="color: mediumseagreen">Disetujui</i>
                                                    @elseif($user->statuskuota_id == 2)
                                                        <i class="mdi mdi-clock" style="color: orange">Belum Disetujui</i>
                                                        @endif
                                            </td>
                                            <td>
                                                <div class="card-title m-b-0">
                                                    <form action="{{url('a_kuota/'.$user->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{method_field('DELETE')}}
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus kuota?');">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <h1>EMPTY</h1>
                                        @endif
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

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->

@endsection
