@extends('mentor.mentorLayout.mentor_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:10px!important">
            @foreach($nilai as $nilais)
            <form action="{{route('m_nilai.update',$nilais->id)}}" method="post" class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">Edit Nilai</h4>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">A. ASPEK TEKNIS</label>
                    </div>
                    <div class="form-group row">
                        <label for="penulisanlaporan" class="col-sm-3 text-right control-label col-form-label">Penulisan Laporan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penulisanlaporan" name="penulisanlaporan" placeholder="Penulisan Laporan" value="{{$nilais->penulisanlaporan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penguasaanmateri" class="col-sm-3 text-right control-label col-form-label">Penguasaan Materi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penguasaanmateri" name="penguasaanmateri" placeholder="Penguasaan Materi" value="{{$nilais->penguasaanmateri}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penyelesaianmakalah" class="col-sm-3 text-right control-label col-form-label">Penyelesaian Makalah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="penyelesaianmakalah" name="penyelesaianmakalah" placeholder="Penyelesaian Makalah" value="{{$nilais->penyelesaianmakalah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kemampuananalisa" class="col-sm-3 text-right control-label col-form-label">Kemampuan Analisa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kemampuananalisa" name="kemampuananalisa" placeholder="Kemampuan Analisa" value="{{$nilais->kemampuananalisa}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">B. ASPEK NON TEKNIS</label>
                    </div>
                    <div class="form-group row">
                        <label for="tanggungjawab" class="col-sm-3 text-right control-label col-form-label">Disiplin/Tanggung Jawab</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tanggungjawab" name="tanggungjawab" placeholder="Disiplin/Tanggung Jawab" value="{{$nilais->tanggungjawab}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kehadiran" class="col-sm-3 text-right control-label col-form-label">Kehadiran</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kehadiran" name="kehadiran" placeholder="Kehadiran" value="{{$nilais->kehadiran}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sikap" class="col-sm-3 text-right control-label col-form-label">Sikap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sikap" name="sikap" placeholder="Sikap" value="{{$nilais->sikap}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengetahuan" class="col-sm-3 text-right control-label col-form-label">Pengetahuan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pengetahuan" name="pengetahuan" placeholder="Pengetahuan" value="{{$nilais->pengetahuan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inisiatif" class="col-sm-3 text-right control-label col-form-label">Inisiatif</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inisiatif" name="inisiatif" placeholder="Inisiatif" value="{{$nilais->inisiatif}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kerjasama" class="col-sm-3 text-right control-label col-form-label">Kerjasama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kerjasama" name="kerjasama" placeholder="Kerjasama" value="{{$nilais->kerjasama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kepemimpinan" class="col-sm-3 text-right control-label col-form-label">Kepemimpinan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kepemimpinan" name="kepemimpinan" placeholder="Kepemimpinan" value="{{$nilais->kepemimpinan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="potensi" class="col-sm-3 text-right control-label col-form-label">Potensi Berkembang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="potensi" name="potensi" placeholder="Potensi Berkembang" value="{{$nilais->potensi}}">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Update</button>
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
