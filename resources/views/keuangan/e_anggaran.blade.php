@extends('keuangan.keuanganLayout.keuangan_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:.40rem!important;">
            <form action="{{url('k_anggaran/'.$anggaran->id)}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="card-body">
                    <h4 class="card-title">Ubah Status Anggararn</h4>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-3 text-right control-label col-form-label">Judul</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Anggaran" value="{{$anggaran->judul}}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_id" class="col-sm-3 text-right control-label col-form-label">Status Kuota</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" id="status_id" name="status_id" value="{{$anggaran->statuskuota_id}}" style="width: 100%; height:36px;">
                                <option>{{$anggaran->statuskuota_id}}</option>
                                <optgroup label="Status Anggaran">
                                    <option value=1>DISETUJUI</option>
                                    <option value=2>BELUM DISETUJUI</option>
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
@endsection
