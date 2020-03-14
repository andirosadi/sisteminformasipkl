@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:10px!important;">
            <form action="{{route('a_kuota.store')}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                <div class="card-body">
                    <h4 class="card-title">Ajukan Kuota</h4>
                    <div class="form-group row">
                        <label for="jumlahkuota" class="col-sm-3 text-right control-label col-form-label">Jumlah Kuota</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="jumlahkuota" name="jumlahkuota" placeholder="Jumlah Kuota yang Diajukan" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="divisi" class="col-sm-3 text-right control-label col-form-label">Divisi</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" id="divisi" name="divisi_id"  style="width: 100%; height:36px;">
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
                        </div>

                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
