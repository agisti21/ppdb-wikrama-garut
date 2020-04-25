@extends('layouts')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | Agisti Setia Putri</title>
    <div style="background-image: url(images/logo.jpg);"></div>

</head>
<body>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Yayasan Prawitama</h2>
                <h2>Sekolah Menengah Kejuruan</h2>
                <h2>Wikrama 1 Garut</h2>
                <h7>Status: Terakreditasi "A"</h7>
                <br>
                <h7>SK. BADAN AKREDITASI PROVINSI SEKOLAH NO. 02.00/141/BAP-SM/XII/2012</h7>
                <br>
                <br>
                <h1>Formulir Pendaftaran Peserta Didik Baru</h1>
                <br>
                <br>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pesertas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <h4>I. DATA CALON SISWA</h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Nama Lengkap:</b>
                {{ $peserta->nama_lengkap }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Nama Panggilan:</b>
                {{ $peserta->nama_panggilan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Jenis Kelamin:</b>
                {{ $peserta->jk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Tempat Lahir:</b>
                {{ $peserta->tempat_lahir_siswa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Tanggal Lahir:</b>
                {{ $peserta->tgl_lahir_siswa }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Agama:</b>
                {{ $peserta->agama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Cita-Cita:</b>
                {{ $peserta->cita_cita }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Hoby:</b>
                {{ $peserta->hoby }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Anak ke:</b>
                {{ $peserta->anak_ke }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Jumlah Saudara:</b>
                {{ $peserta->jumlah_saudara }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Berat Badan:</b>
                {{ $peserta->berat_badan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Tinggi Badan:</b>
                {{ $peserta->tinggi_badan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Golongan Darah:</b>
                {{ $peserta->golongan_darah }}
            </div>
        </div>
        <h4>II. KETERANGAN TEMPAT TINGGAL</h4>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>RT:</b>
                {{ $peserta->rt }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>RW:</b>
                {{ $peserta->rw }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Kelurahan:</b>
                {{ $peserta->kelurahan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Kecamatan:</b>
                {{ $peserta->kecamatan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Kota/Kabupaten:</b>
                {{ $peserta->kota }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Provinsi:</b>
                {{ $peserta->prov }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>NO Telpon Rumah:</b>
                {{ $peserta->no_telp }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>E-Mail:</b>
                {{ $peserta->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Tinggal bersama:</b>
                {{ $peserta->bersama }}
            </div>
        </div>
        <h4>III.KETERANGAN KESEHATAN</h4>
        <b>1.Penyakit yang di derita</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>TBC:</b>
                {{ $peserta->tbc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Malaria:</b>
                {{ $peserta->malaria }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Chotipa:</b>
                {{ $peserta->chotipa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Cacar:</b>
                {{ $peserta->cacar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Lain-lain:</b>
                {{ $peserta->lainnya }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>2. Kelainan Jasmani:</b>
                {{ $peserta->kelainan }}
            </div>
        </div>
        <h4>IV. DATA ORANG TUA/WALI</h4>
        <b>A. Ayah</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>1. Nama Ayah :</b>
                {{ $peserta->nama_ayah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>2. Tempat Lahir :</b>
                {{ $peserta->tempat_lahir_ayah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>3. Tanggal Lahir :</b>
                {{ $peserta->tgl_lahir_ayah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>4. Pendidikan Terakhir  :</b>
                {{ $peserta->pendidikan_ayah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>5. Kewarganegaraan  :</b>
                {{ $peserta->negara_ayah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>5. Agama :</b>
                {{ $peserta->agama_ayah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>4. No HP/WA  :</b>
                {{ $peserta->no_ayah }}
            </div>
        </div>
        <br>
        <b>B. IBU<b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>1. Nama Ibu :</b>
                {{ $peserta->nama_ibu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>2. Tempat Lahir :</b>
                {{ $peserta->tempat_lahir_ibu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>3. Tanggal Lahir :</b>
                {{ $peserta->tgl_lahir_ibu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>4. Pendidikan Terakhir  :</b>
                {{ $peserta->pendidikan_ibu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>5. Kewarganegaraan  :</b>
                {{ $peserta->negara_ibu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>5. Agama :</b>
                {{ $peserta->agama_ibu }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>4. No HP/WA  :</b>
                {{ $peserta->no_ibu }}
            </div>
        </div>
        <b>C. WALI</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>1. Nama Wali :</b>
                {{ $peserta->nama_wali }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>2. Tempat Lahir :</b>
                {{ $peserta->tempat_lahir_wali }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>3. Tanggal Lahir :</b>
                {{ $peserta->tgl_lahir_wali }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>4. Pendidikan Terakhir  :</b>
                {{ $peserta->pendidikan_wali }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>5. Kewarganegaraan  :</b>
                {{ $peserta->negara_wali }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>5. Agama :</b>
                {{ $peserta->agama_wali }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>4. No HP/WA  :</b>
                {{ $peserta->no_wali }}
            </div>
        </div>
        <h4>IV. NILAI RAPORT</h4>
        <br>
        <b>PAI</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->pai_s1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->pai_s2 }}
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->pai_s3 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->pai_s4 }}
            </div>
        </div>
        <br>
        <b>Kelas 9</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->pai_s5 }}
            </div>
        </div>
        <br>
        <b>B. INDONESIA</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->indo_s1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->indo_s2 }}
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->indo_s3 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->indo_s4 }}
            </div>
        </div>
        <br>
        <b>Kelas 9</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->indo_s5 }}
            </div>
        </div>
        <br>
        <br>
        <b>B. INGGRIS</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ing_s1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->ing_s2 }}
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ing_s3 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->ing_s4 }}
            </div>
        </div>
        <br>
        <b>Kelas 9</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ing_s5 }}
            </div>
        </div>
        <br>
        <b>MATEMATIKA</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->mtk_s1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->mtk_s2 }}
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->mtk_s3 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->mtk_s4 }}
            </div>
        </div>
        <br>
        <b>Kelas 9</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->mtk_s5 }}
            </div>
        </div>
        <br>
        <b>IPA</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ipa_s1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->ipa_s2 }}
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ipa_s3 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->ipa_s4 }}
            </div>
        </div>
        <br>
        <b>Kelas 9</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ipa_s5 }}
            </div>
        </div>
        <br>
        <b>IPS</b>
        <br>
        <b>Kelas 7</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ips_s1 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->ips_s2 }}
            </div>
        </div>
        <br>
        <b>Kelas 8</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ips_s3 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 2 :</b>
                {{ $peserta->ips_s4 }}
            </div>
        </div>
        <br>
        <b>Kelas 9</b>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Semester 1 :</b>
                {{ $peserta->ips_s5 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Prestasi yang diraih :</b>
                {{ $peserta->prestasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <b>Info SMK Wikrama 1 Garut dari :</b>
                {{ $peserta->info }}
            </div>
        </div>
    </div>
@endsection
</body>
</html>