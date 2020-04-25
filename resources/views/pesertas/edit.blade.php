@extends('layouts')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Peserta</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('pesertas.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('pesertas.update',$peserta->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">
         <h4>I.DATA DIRI<h4>
         <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>No Pendaftaran:</strong>

                    <input type="text" name="no_pendaftaran" value="{{ $peserta->no_pendaftaran }}" class="form-control" placeholder="Nama Lengkap">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>No Tes : </strong>

                    <input type="text" name="no_tes" value="{{ $peserta->no_tes }}" class="form-control" placeholder="Nama Lengkap">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jalur Pendaftaran:</strong>

                    <input type="text" name="jalur_penerimaan" value="{{ $peserta->jalur_penerimaan }}" class="form-control" placeholder="Nama Lengkap">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama Lengkap:</strong>

                    <input type="text" name="nama_lengkap" value="{{ $peserta->nama_lengkap }}" class="form-control" placeholder="Nama Lengkap">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama Panggilan:</strong>

                    <input type="text" name="nama_panggilan" value="{{ $peserta->nama_panggilan }}" class="form-control" placeholder="Nama Lengkap">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jenis Kelamin:</strong>

                    <select class="form-control" name="jk" id="jk">
                    @foreach($jekas as $jeka)
                    <option value="{{$jeka->jk}}" @if($peserta->jk == $jeka->jk)selected 
                    @endif>{{$jeka->jk}}</option>
                    @endforeach
                </select>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tempat Lahir:</strong>

                    <input type="text" name="tempat_lahir_siswa" value="{{ $peserta->tempat_lahir_siswa }}" class="form-control" placeholder="Tempat">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tanggal Lahir:</strong>

                    <input type="text" name="tgl_lahir_siswa" value="{{ $peserta->tgl_lahir_siswa }}" class="form-control" placeholder="Tanggal">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Agama:</strong>

                    <select class="form-control" name="agama" id="agama">
                    @foreach($agamas as $agama)
                    <option value="{{$agama->agama}}" @if($peserta->agama == $agama->agama)selected 
                    @endif>{{$agama->agama}}</option>
                    @endforeach
                </select>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Cita-Cita:</strong>

                    <input type="text" name="cita_cita" value="{{ $peserta->cita_cita }}" class="form-control" placeholder="Cita-Cita">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Hoby:</strong>

                    <input type="text" name="hoby" value="{{ $peserta->hoby }}" class="form-control" placeholder="Hoby">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Anak ke-:</strong>

                    <input type="text" name="anak_ke" value="{{ $peserta->anak_ke }}" class="form-control" placeholder="Anak ke-">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Jumlah Saudara:</strong>

                    <input type="text" name="jumlah_saudara" value="{{ $peserta->jumlah_saudara }}" class="form-control" placeholder="Jumlah Saudara">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Berat Badan:</strong>

                    <input type="text" name="berat_badan" value="{{ $peserta->berat_badan }}" class="form-control" placeholder="Berat Badan">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tinggi Badan:</strong>

                    <input type="text" name="tinggi_badan" value="{{ $peserta->tinggi_badan }}" class="form-control" placeholder="Tinggi Badan">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Golongan Darah:</strong>
                    <select class="form-control" name="golongan_darah" id="goldar">
                    @foreach($goldars as $goldar)
                    <option value="{{$goldar->goldar}}" @if($peserta->golongan_darah == $goldar->goldar)selected 
                    @endif>{{$goldar->goldar}}</option>
                    @endforeach
                </select>
                </div>

            </div>
            <h4>II.KETERANGAN TEMPAT TINGGAL</h4>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>RT:</strong>

                    <input type="number" name="rt" value="{{ $peserta->rt }}" class="form-control" placeholder="RT">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>RW:</strong>

                    <input type="text" name="rw" value="{{ $peserta->rw }}" class="form-control" placeholder="RW">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Kelurahan:</strong>

                    <input type="text" name="kelurahan" value="{{ $peserta->kelurahan }}" class="form-control" placeholder="Kelurahan">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Kecamatan:</strong>

                    <input type="text" name="kecamatan" value="{{ $peserta->kecamatan }}" class="form-control" placeholder="Kecamatan">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Kota/Kabupaten:</strong>

                    <input type="text" name="kota" value="{{ $peserta->kota }}" class="form-control" placeholder="Kota/Kabupaten">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Provinsi:</strong>

                    <input type="text" name="provinsi" value="{{ $peserta->provinsi }}" class="form-control" placeholder="Provinsi">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>NO Telpon Rumah:</strong>

                    <input type="text" name="no_telp" value="{{ $peserta->no_telp }}" class="form-control" placeholder="NO telpon rumah">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>E-mail:</strong>

                    <input type="text" name="email" value="{{ $peserta->email }}" class="form-control" placeholder="E-Mail">

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tinggal dengan:</strong>

                    <select class="form-control" name="bersama" id="tinggal">
                    @foreach($tinggals as $tinggal)
                    <option value="{{$tinggal->tinggal}}" @if($peserta->bersama == $tinggal->tinggal)selected 
                    @endif>{{$tinggal->tinggal}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <h4>III.KETERANGAN KESEHATAN</h4>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>TBC:</strong>

                    <input type="text" name="tbc" value="{{ $peserta->tbc }}" class="form-control" placeholder="TBC">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Malaria:</strong>

                    <input type="text" name="malaria" value="{{ $peserta->malaria }}" class="form-control" placeholder="Malaria">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Chotipa:</strong>

                    <input type="text" name="chotipa" value="{{ $peserta->chotipa }}" class="form-control" placeholder="Chotipa">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Cacar:</strong>

                    <input type="text" name="cacar" value="{{ $peserta->cacar }}" class="form-control" placeholder="Cacar">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Lain-lain:</strong>

                    <input type="text" name="lainnya" value="{{ $peserta->lainnya }}" class="form-control" placeholder="lain-lain">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Kelainan Jasmani/Lainnya:</strong>

                    <input type="text" name="kelainan" value="{{ $peserta->kelainan }}" class="form-control" placeholder="Kelainan">

                </div>

            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>
    </form>

@endsection