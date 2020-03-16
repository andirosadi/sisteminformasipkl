@extends('peserta.pesertaLayout.peserta_design')
@section('content')
<div class="row">
    @if (count($errors)>0)
    <div class="alert alert-danger" role="alert" style="border-radius:10px!important;">
        <h4 class="alert-heading mdi mdi-file-document">Kesalahan Laporan!</h4>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
</div>
<div class="row">
    <div class="card shadow-sm" style="border-radius:10px!important;">
        <div class="card-body wizard-content">
            <h4 class="card-title">Buat Laporan PKL</h4>
            <h6 class="card-subtitle"></h6>
            <form action="{{route('laporanpkl.upload')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('post')}}
                <div>
                    <section>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input id="judul" name="judul" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                            <div class="alert alert-success" role="alert" style="border-radius:10px!important;">
                                <h4 class="alert-heading mdi mdi-file-document">Ketentuan File!</h4>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div for="laporan" class="card-title">Laporan PKL
                                <P><input type="file" class="form-control-file" id="laporan" name="laporan" required></P>
                            </div>
                        </div>
                    </section>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
