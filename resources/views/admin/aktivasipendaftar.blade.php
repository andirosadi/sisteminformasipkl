@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
    <div class="col-12 d-flex no-block align-items-center">
        <h4 class="page-title">Kuota</h4>
    </div>
    <!-- Humas -->
    <div class="col-md-6 col-lg-3 col-xlg-3" >
        <div class="card card-hover" style="background-color: transparent">
            @foreach($kuotahumas as $kuota_humas)
                @if ($humascount==$kuota_humas->jumlahkuota)
                    <div class="box bg-danger text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_humas->namadivisi}}</h6><hr>
                        <h6 class="text-white">KUOTA PENUH</h6>
                    </div>
                @elseif($humascount > $kuota_humas->jumlahkuota / 2 && $humascount < $kuota_humas->jumlahkuota)
                    <div class="box bg-warning text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_humas->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$humascount}}/{{$kuota_humas->jumlahkuota}}</h6>
                    </div>
                @elseif($humascount <= $kuota_humas->jumlahkuota / 2)
                    <div class="box bg-success text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_humas->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$humascount}}/{{$kuota_humas->jumlahkuota}}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- SIS -->
    <div class="col-md-6 col-lg-3 col-xlg-3" >
        <div class="card card-hover" style="background-color: transparent">
            @foreach($kuotasis as $kuota_sis)
                @if ($siscount==$kuota_sis->jumlahkuota)
                    <div class="box bg-danger text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_sis->namadivisi}}</h6><hr>
                        <h6 class="text-white">KUOTA PENUH</h6>
                    </div>
                @elseif($siscount > $kuota_sis->jumlahkuota / 2 && $siscount < $kuota_sis->jumlahkuota)
                    <div class="box bg-warning text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_sis->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$siscount}}/{{$kuota_sis->jumlahkuota}}</h6>
                    </div>
                @elseif($siscount <= $kuota_sis->jumlahkuota / 2)
                    <div class="box bg-success text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_sis->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$siscount}}/{{$kuota_sis->jumlahkuota}}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Keuangan -->
    <div class="col-md-6 col-lg-3 col-xlg-3" >
        <div class="card card-hover" style="background-color: transparent">
            @foreach($kuotakeuangan as $kuota_keuangan)
                @if ($keuangancount==$kuota_keuangan->jumlahkuota)
                    <div class="box bg-danger text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_keuangan->namadivisi}}</h6><hr>
                        <h6 class="text-white">KUOTA PENUH</h6>
                    </div>
                @elseif($keuangancount > $kuota_keuangan->jumlahkuota / 2 && $keuangancount < $kuota_keuangan->jumlahkuota)
                    <div class="box bg-warning text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_keuangan->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$keuangancount}}/{{$kuota_keuangan->jumlahkuota}}</h6>
                    </div>
                @elseif($keuangancount <= $kuota_sis->jumlahkuota / 2)
                    <div class="box bg-success text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_keuangan->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$keuangancount}}/{{$kuota_keuangan->jumlahkuota}}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Managerial Operasi Unit 1 - 4 -->
    <div class="col-md-6 col-lg-3 col-xlg-3" >
        <div class="card card-hover" style="background-color: transparent">
            @foreach($kuotamou1 as $kuota_mou1)
                @if ($mou1count==$kuota_mou1->jumlahkuota)
                    <div class="box bg-danger text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mou1->namadivisi}}</h6><hr>
                        <h6 class="text-white">KUOTA PENUH</h6>
                    </div>
                @elseif($mou1count > $kuota_mou1->jumlahkuota / 2 && $mou1count < $kuota_mou1->jumlahkuota)
                    <div class="box bg-warning text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mou1->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mou1count}}/{{$kuota_mou1->jumlahkuota}}</h6>
                    </div>
                @elseif($mou1count <= $kuota_mou1->jumlahkuota / 2)
                    <div class="box bg-success text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mou1->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mou1count}}/{{$kuota_mou1->jumlahkuota}}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Managerial Operasi Unit 5 - 7 -->
    <div class="col-md-6 col-lg-3 col-xlg-3" >
        <div class="card card-hover" style="background-color: transparent">
            @foreach($kuotamou5 as $kuota_mou5)
                @if ($mou5count==$kuota_mou5->jumlahkuota)
                    <div class="box bg-danger text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mou5->namadivisi}}</h6><hr>
                        <h6 class="text-white">KUOTA PENUH</h6>
                    </div>
                @elseif($mou5count > $kuota_mou5->jumlahkuota / 2 && $mou5count < $kuota_mou5->jumlahkuota)
                    <div class="box bg-warning text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mou5->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mou5count}}/{{$kuota_mou5->jumlahkuota}}</h6>
                    </div>
                @elseif($mou5count <= $kuota_mou5->jumlahkuota / 2)
                    <div class="box bg-success text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mou5->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mou5count}}/{{$kuota_mou5->jumlahkuota}}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Managerial Pemeliharaan Unit 1 - 4 -->
    <div class="col-md-6 col-lg-3 col-xlg-3" >
        <div class="card card-hover" style="background-color: transparent">
            @foreach($kuotampu1 as $kuota_mpu1)
                @if ($mpu1count==$kuota_mpu1->jumlahkuota)
                    <div class="box bg-danger text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mpu1->namadivisi}}</h6><hr>
                        <h6 class="text-white">KUOTA PENUH</h6>
                    </div>
                @elseif($mpu1count > $kuota_mpu1->jumlahkuota / 2 && $mpu1count < $kuota_mpu1->jumlahkuota)
                    <div class="box bg-warning text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mpu1->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mpu1count}}/{{$kuota_mpu1->jumlahkuota}}</h6>
                    </div>
                @elseif($mpu1count <= $kuota_mpu1->jumlahkuota / 2)
                    <div class="box bg-success text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mpu1->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mpu1count}}/{{$kuota_mpu1->jumlahkuota}}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Managerial Pemeliharaan Unit 5 - 7 -->
    <div class="col-md-6 col-lg-3 col-xlg-3" >
        <div class="card card-hover" style="background-color: transparent">
            @foreach($kuotampu5 as $kuota_mpu5)
                @if ($mpu5count==$kuota_mpu5->jumlahkuota)
                    <div class="box bg-danger text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mpu5->namadivisi}}</h6><hr>
                        <h6 class="text-white">KUOTA PENUH</h6>
                    </div>
                @elseif($mpu5count > $kuota_mpu5->jumlahkuota / 2 && $mpu5count < $kuota_mpu5->jumlahkuota)
                    <div class="box bg-warning text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mpu5->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mpu5count}}/{{$kuota_mpu5->jumlahkuota}}</h6>
                    </div>
                @elseif($mpu5count <= $kuota_mpu5->jumlahkuota / 2)
                    <div class="box bg-success text-center" style="border-radius:10px!important">
                        <h6 class="text-white">{{$kuota_mpu5->namadivisi}}</h6><hr>
                        <h6 class="text-white">{{$mpu5count}}/{{$kuota_mpu5->jumlahkuota}}</h6>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:10px!important;">
            <form action="{{url('a_pendaftar/'.$pendaftar->id)}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="card-body">
                    <h4 class="card-title">Aktivasi Pendaftar</h4>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name"  value="{{$pendaftar->name}}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sekolah" class="col-sm-3 text-right control-label col-form-label">Sekolah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sekolah" name="sekolah"  value="{{$pendaftar->sekolah}}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-3 text-right control-label col-form-label">Fakultas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fakultas" name="fakultas"  value="{{$pendaftar->fakultas}}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-3 text-right control-label col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <input type="jurusan" class="form-control" id="jurusan" name="jurusan"  value="{{$pendaftar->jurusan}}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="divisi" class="col-sm-3 text-right control-label col-form-label">Divisi</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" id="divisi" name="divisi_id" value="{{$pendaftar->divisi_id}}" style="width: 100%; height:36px;">
                                <option>{{$pendaftar->divisi_id}}</option>
                                <optgroup label="Divisi">
                                    @foreach($divisi as $divisis)
                                    <option value={{$divisis->id}}>{{$divisis->namadivisi}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 text-right control-label col-form-label">Status</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" id="status" name="status_id" value="{{$pendaftar->status_id}}" style="width: 100%; height:36px;">
                                <option>{{$pendaftar->status_id}}</option>
                                <optgroup label="Status">
                                    <option value=1>AKTIF</option>
                                    <option value=2>TIDAK AKTIF</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
  @foreach($coba as $semuakuota)
  <div class="col-md-6 col-lg-3 col-xlg-3" >
      <div class="card card-hover" style="background-color: transparent">
                  <div class="box bg-danger text-center" style="border-radius:10px!important">
                      <h6 class="text-white">{{$semuakuota->namadivisi}}</h6><hr>
                      <h6 class="text-white">{{$semuakuota->jumlahkuota}}</h6>
                  </div>
      </div>
  </div>
  @endforeach
</div>
@endsection
