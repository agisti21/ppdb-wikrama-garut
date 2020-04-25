@extends('layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pesertas.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <h7>Whoops!</h7> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pesertas.store') }}" method="POST">
    @csrf
    
     <div class="row">
     <h4>I. DATA CALON MURID</h4>
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h7>No Pendaftaran:</h7>
                <input type="number" name="no_pendaftaran" class="form-control" placeholder = "No pendafatran" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h7>No Tes :</h7>
                <input type="number" name="no_tes" class="form-control" placeholder ="No Tes" required=""autocomplete="off">
            </div>
        </div>
        <br>
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h7>Jalur Pendaftaran: </h7>
                <select class="form-control" name="jalur_penerimaan" id="jalur">
                @foreach($jalurs as $jalur)
                <option value="{{$jalur->jalur}}">{{$jalur->jalur}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h7>Nama Lengkap:</h7>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required=""autocomplete="off">
            </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Nama Panggilan:</h7>
            <input type="text" name="nama_panggilan" class="form-control" placeholder="Nama Panggilan" required=""autocomplete="off">
            </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Jenis Kelamin:</h7>
            <select class="form-control" name="jk" id="jk">
                @foreach($jekas as $jeka)
                <option value="{{$jeka->jk}}">{{$jeka->jk}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tempat Lahir:</h7>
            <input type="text" name="tempat_lahir_siswa" class="form-control" placeholder="Tempat Lahir" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tanggal Lahir:</h7>
            <input type="text" name="tgl_lahir_siswa" placeholder="Tanggal Lahir" class ="date" required=""autocomplete="off">
            </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Agama:</h7>
            <select class="form-control" name="agama" id="agama">
                @foreach($agamas as $agama)
                <option value="{{$agama->agama}}">{{$agama->agama}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Cita-Cita:</h7>
            <input type="text" name="cita_cita" class="form-control" placeholder="Cita-Cita" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Hoby:</h7>
            <input type="text" name="hoby" class="form-control" placeholder="Hoby" required=""autocomplete="off"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Anak ke- :</h7>
            <input type="number" name="anak_ke" class="form-control" placeholder="Anak ke-" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Jumlah Saudara:</h7>
            <input type="number" name="jumlah_saudara" class="form-control" placeholder="Jumlah Saudara" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Berat badan:</h7>
            <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tinggi badan:</h7>
            <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Golongan Darah:</h7>
            <select class="form-control" name="golongan_darah" id="goldar" required=""autocomplete="off">
                @foreach($goldars as $goldar)
                <option value="{{$goldar->goldar}}">{{$goldar->goldar}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <h4>II. KETERANGAN TEMPAT TINGGAL</h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h7>RT:</h7>
                <input type="number" name="rt" class="form-control" placeholder="RT" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>RW:</h7>
            <input type="number" name="rw" class="form-control" placeholder="RW" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Kelurahan:</h7>
            <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Kecamatan:</h7>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Kota/Kabupaten:</h7>
            <input type="text" name="kota" class="form-control" placeholder="Kota/Kabupaten" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Provinsi:</h7>
            <input type="text" name="prov" class="form-control" placeholder="Provinsi" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>No Telpon Rumah:</h7>
            <input type="number" name="no_telp" class="form-control" placeholder="No Telpon Rumah" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>E-mail:</h7>
            <input type="text" name="email" class="form-control" placeholder="E-mail" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tinggal dengan:</h7>
            <select class="form-control" name="bersama" id="tinggal">
                @foreach($tinggals as $tinggal)
                <option value="{{$tinggal->tinggal}}">{{$tinggal->tinggal}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <h4>III.KETERANGAN KESEHATAN</h4>
        <h7>1. Penyakit yang di derita</h7>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h7>TBC:</h7>
                <input type="text" name="tbc" class="form-control" placeholder="Sebutkan/Kapan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Malaria:</h7>
            <input type="text" name="malaria" class="form-control" placeholder="Sebutkan/Kapan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Chotipa:</h7>
            <input type="text" name="chotipa" class="form-control" placeholder="Sebutkan/Kapan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Cacar:</h7>
            <input type="text" name="cacar" class="form-control" placeholder="Sebutkan/Kapan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Lain-lain:</h7>
            <input type="text" name="lainnya" class="form-control" placeholder="Sebutkan/Kapan" required=""autocomplete="off"> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>2. Kelainan Jasmani/Lainnya:</h7>
            <input type="text" name="kelainan" class="form-control" placeholder="Sebutkan/Kapan" required=""autocomplete="off">
            </div>
        </div>
        <h4>IV.DATA ORANG TUA/WALI</h4>
        <br>
        <b>1. Ayah</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Nama Ayah:</h7>
            <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tempat Lahir:</h7>
            <input type="text" name="tempat_lahir_ayah" class="form-control" placeholder="Tempat lahir" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tanggal Lahir:</h7>
            <input type="text" name="tgl_lahir_ayah" class="date" class="form-control" placeholder="Tanggal Lahir" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Pekerjaan :</h7>
            <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Pendidikan Terakhir:</h7>
            <select class="form-control" name="pendidikan_ayah" id="pendidikan">
                @foreach($pendidikans as $pendidikan)
                <option value="{{$pendidikan->pendidikan}}">{{$pendidikan->pendidikan}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Kewarganegaraan:</h7>
            <input type="text" name="negara_ayah" class="form-control" placeholder="Kewarganegaraan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Agama :</h7>
            <<select class="form-control" name="agama_ayah" id="agama" >
                @foreach($agamas as $agama)
                <option value="{{$agama->agama}}">{{$agama->agama}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>NO HP/WA:</h7>
            <input type="number" name="no_ayah" class="form-control" placeholder="No HP" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>2. Ibu</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Nama Ibu:</h7>
            <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tempat Lahir:</h7>
            <input type="text" name="tempat_lahir_ibu" class="form-control" placeholder="Tempat lahir" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tanggal Lahir:</h7>
            <input type="text" name="tgl_lahir_ibu" class="date" class="form-control" placeholder="Tanggal Lahir" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Pekerjaan :</h7>
            <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ayah" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Pendidikan Terakhir:</h7>
            <select class="form-control" name="pendidikan_ibu" id="pendidikan">
                @foreach($pendidikans as $pendidikan)
                <option value="{{$pendidikan->pendidikan}}">{{$pendidikan->pendidikan}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Kewarganegaraan:</h7>
            <input type="text" name="negara_ibu" class="form-control" placeholder="Kewarganegaraan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Agama :</h7>
            <select class="form-control" name="agama_ibu" id="agama">
                @foreach($agamas as $agama)
                <option value="{{$agama->agama}}">{{$agama->agama}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>NO HP/WA:</h7>
            <input type="number" name="no_ibu" class="form-control" placeholder="No HP" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>3. Wali</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Nama Wali:</h7>
            <input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tempat Lahir:</h7>
            <input type="text" name="tempat_lahir_wali" class="form-control" placeholder="Tempat lahir" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Tanggal Lahir:</h7>
            <input type="text" name="tgl_lahir_wali" class="date" class="form-control" placeholder="Tanggal Lahir" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Pekerjaan :</h7>
            <input type="text" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Ayah" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Pendidikan Terakhir:</h7>
            <select class="form-control" name="pendidikan_wali" id="pendidikan">
                @foreach($pendidikans as $pendidikan)
                <option value="{{$pendidikan->pendidikan}}">{{$pendidikan->pendidikan}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Kewarganegaraan:</h7>
            <input type="text" name="negara_wali" class="form-control" placeholder="Kewarganegaraan" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Agama :</h7>
            <select class="form-control" name="agama_wali" id="agama">
                @foreach($agamas as $agama)
                <option value="{{$agama->agama}}">{{$agama->agama}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>NO HP/WA:</h7>
            <input type="number" name="no_wali" class="form-control" placeholder="No HP" required=""autocomplete="off">
            </div>
        </div>
        <h4>V. NILAI RAPORT</h4>
        <b>PAI</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="pai_s1" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="pai_s2" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="pai_s3" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="pai_s4" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 9 </b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="pai_s5" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>B. INDONESIA</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="indo_s1" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="indo_s2" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="indo_s3" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="indo_s4" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 9 </b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="indo_s5" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>B. INGGRIS</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ing_s1" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="ing_s2" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ing_s3" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="ing_s4" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 9 </b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ing_s5" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>MATEMATIKA</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="mtk_s1" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="mtk_s2" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="mtk_s3" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="mtk_s4" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 9 </b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="mtk_s5" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>IPA</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ipa_s1" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="ipa_s2" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ipa_s3" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="ipa_s4" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 9 </b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ipa_s5" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>IPS</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ips_s1" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="ips_s2" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ips_s3" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 2:</h7>
            <input type="number" name="ips_s4" class="form-control" placeholder="Semester 2" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <b>Kelas 9 </b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Semester 1:</h7>
            <input type="number" name="ips_s5" class="form-control" placeholder="Semester 1" required=""autocomplete="off">
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h7>Prestasi yang  pernah diraih:</h7>
            <input type="text" name="prestasi" class="form-control" placeholder="Prestasi" required=""autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <b>Informasi SMK Wikrama 1 Garut Dari:</b>
            <select class="form-control" name="info" id="info" required=""autocomplete="off">
                @foreach($infos as $info)
                <option value="{{$info->info}}">{{$info->info}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <link rel="stylesheet" href="{{ URL ::asset('css/jquery-ui.css')}}" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
    </script>
    </form>
@endsection