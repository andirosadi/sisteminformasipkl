@extends('mentor.mentorLayout.mentor_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius: 10px!important">
            <form action="{{url('m_kuota/'.$kuota->id)}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="card-body">
                    <h4 class="card-title">Edit Kuota</h4>
                    <div class="form-group row">
                        <label for="jumlahkuota" class="col-sm-3 text-right control-label col-form-label">Jumlah Kuota</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jumlahkuota" name="jumlahkuota" value="{{$kuota->jumlahkuota}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="statuskuota" class="col-sm-3 text-right control-label col-form-label">Status Kuota</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" id="statuskuota" name="statuskuota_id" value="{{$kuota->statuskuota_id}}" style="width: 100%; height:36px;">
                                <option>{{$kuota->statuskuota_id}}</option>
                                <optgroup label="Hak Akses">
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
