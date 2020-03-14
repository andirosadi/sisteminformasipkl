@extends('mentor.mentorLayout.mentor_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:.40rem!important">
            <div class="card-body">
                <h4 class="card-title">Tambah Nilai</h4>
                <div class="alert alert-warning" role="alert" style="border-radius:.40rem!important">
                    <h4 class="alert-heading">Keterangan</h4>
                    <p>Keterangan nilai berdasarkan ketetapan perusahaan PT. Indonesia Power UP Suralaya.</p>
                    <hr>
                    <div class="col text-center">
                        <div class="btn-group btn-group-justified">
                            <a class="btn btn-success "><h6 class="text-white">A = Memuaskan (96-100)</h6></a>
                            <a class="btn btn-info"><h6 class="text-white">B = Baik Sekali (86-95)</h6></a>
                            <a class="btn btn-primary"><h6 class="text-white">C = Baik (71-85)</h6></a>
                            <a class="btn btn-warning"><h6 class="text-white">D = Cukup (56-70)</h6></a>
                            <a class="btn btn-danger"><h6 class="text-white">E = Kurang (41-55)</h6></a>
                        </div>
                    </div>
                </div>
                <div class="wizard-content">
                    <form action="{{route('m_nilai.store')}}" method="post">
                        {{csrf_field()}}
                        <section>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="pendaftar_id">Pilih Peserta PKL</label>
                                    <select class="select2 form-control custom-select" id="pendaftar_id" name="pendaftar_id">
                                        <option></option>
                                        <optgroup label="Peserta PKL">
                                            @foreach($peserta as $pesertas)
                                            <option value="{{$pesertas->id}}">{{$pesertas->name}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 text-left control-label col-form-label"><b>A. Aspek Teknis</b></label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="penulisanlaporan">Penulisan Laporan</label>
                                    <input id="penulisanlaporan" name="penulisanlaporan" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="penguasaanmateri">Penguasaan Materi</label>
                                    <input id="penguasaanmateri" name="penguasaanmateri" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="penyelesaianmakalah">Penyelesaian Makalah</label>
                                    <input id="penyelesaianmakalah" name="penyelesaianmakalah" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="kemampuananalisa">Kemampuan Analisa</label>
                                        <input id="kemampuananalisa" name="kemampuananalisa" type="number" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 text-left control-label col-form-label"><b>B. Aspek Non Teknis</b></label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="tanggungjawab">Disiplin/Tanggung Jawab</label>
                                    <input id="tanggungjawab" name="tanggungjawab" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="kehadiran">Kehadiran</label>
                                    <input id="kehadiran" name="kehadiran" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="sikap">Sikap</label>
                                    <input id="sikap" name="sikap" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="pengetahuan">Pengetahuan</label>
                                    <input id="pengetahuan" name="pengetahuan" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="inisiatif">Inisiatif</label>
                                    <input id="inisiatif" name="inisiatif" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="kerjasama">Kerjasama</label>
                                    <input id="kerjasama" name="kerjasama" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="kepemimpinan">Kepemimpinan</label>
                                    <input id="kepemimpinan" name="kepemimpinan" type="number" class="required form-control">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="potensi">Potensi Berkembang</label>
                                    <input id="potensi" name="potensi" type="number" class="required form-control">
                                </div>
                            </div>
                        </section>
                        <div class="row">
                            <div class="col-sm-12" align="right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
