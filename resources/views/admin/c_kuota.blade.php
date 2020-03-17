@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-12 col-xlg-3">
        <div class="card card-hover" style="background-color: transparent">
            <div class="box bg-info text-center" style="border-radius:10px!important">
                <h1 class="font-light text-white"><i class="mdi mdi-credit-card-multiple"></i></h1>
                <h5 class="text-white">Ajukan Kuota</h5>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:10px!important;">
            <form action="{{route('a_kuota.store')}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="jumlahkuota" class="col-sm-3 text-right control-label col-form-label">Jumlah Kuota</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="jumlahkuota" name="jumlahkuota" placeholder="Jumlah Kuota yang Diajukan" value="{{old('jumlahkuota')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="divisi" class="col-sm-3 text-right control-label col-form-label">Divisi</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select{{ $errors->has('divisi_id') ? ' is-invalid' : '' }}" id="divisi" name="divisi_id" style="width: 100%; height:36px;">
                                <option></option>
                                <optgroup label="Pilih Divisi">
                                    <option value=1>SDM & Humas</option>
                                    <option value=2>SIS</option>
                                    <option value=3>Keuangan</option>
                                    <option value=4>Managerial Operasi Unit 1 - 4</option>
                                    <option value=5>Managerial Operasi Unit 5 - 7</option>
                                    <option value=6>Managerial Pemeliharaan Unit 1 - 4</option>
                                    <option value=7>Managerial Pemeliharaan Unit 5 - 7</option>
                                </optgroup>
                            </select>
                            @if ($errors->has('divisi_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>Divisi sudah memiliki kuota</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body text-right">
                        <button type="submit" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
