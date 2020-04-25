@extends('layouts')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Calon Murid</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pesertas.create') }}">Create</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama </th>
            <th>Cita-Cita</th>
            <th>Hoby</th>
            <th>Anak ke </th>
            <th>Jumlah Saudara</th>
            <th>Berat Badan</th>
            <th>Tinggi badan</th>
            <th>Golongan Darah</th>
            <th>RT</th>
            <th>RW</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kota/Kabupaten</th>
            <th>Provinsi</th>
            <th>No Telpon Rumah</th>
            <th>E-Mail</th>
            <th>Tinggal dengan </th>
            <th>TBC</th>
            <th>Malaria</th>
            <th>Chotipa</th>
            <th>Cacar</th>
            <th>Lain-lain</th>
            <th>Kelainan Jasmani</th>
            <th>Nama Ayah</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
            <th>Kewarganegaraan</th>
            <th>Agama</th>
            <th>No HP/WA</th>
            <th>Nama Ibu</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
            <th>Kewarganegaraan</th>
            <th>Agama</th>
            <th>No HP/WA</th>
            <th>Nama Wali</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
            <th>Kewarganegaraan</th>
            <th>Agama</th>
            <th>No HP/WA</th>
            <th>PAI S1(kelas 7)</th>
            <th>PAI S2(kelas 7)</th>
            <th>PAI S1(Kelas 8)</th>
            <th>PAI S2(Kelas 8)</th>
            <th>PAI S1(Kelas 9)</th>
            <th>B. Indonesia S1(kelas 7)</th>
            <th>B. Indonesia S2(kelas 7)</th>
            <th>B. Indonesia S1(Kelas 8)</th>
            <th>B. Indonesia S2(Kelas 8)</th>
            <th>B. Indonesia S1(Kelas 9)</th>
            <th>B. Inggris S1(kelas 7)</th>
            <th>B. Inggris S2(kelas 7)</th>
            <th>B. Inggris S1(Kelas 8)</th>
            <th>B. Inggris S2(Kelas 8)</th>
            <th>B. Inggris S1(Kelas 9)</th>
            <th>Matematika S1(kelas 7)</th>
            <th>Matematika S2(kelas 7)</th>
            <th>Matematika S1(Kelas 8)</th>
            <th>Matematika S2(Kelas 8)</th>
            <th>Matematika S1(Kelas 9)</th>
            <th>IPA S1(kelas 7)</th>
            <th>IPA S2(kelas 7)</th>
            <th>IPA S1(Kelas 8)</th>
            <th>IPA S2(Kelas 8)</th>
            <th>IPA S1(Kelas 9)</th>
            <th>IPS S1(kelas 7)</th>
            <th>IPS S2(kelas 7)</th>
            <th>IPS S1(Kelas 8)</th>
            <th>IPS S2(Kelas 8)</th>
            <th>IPS S1(Kelas 9)</th>
            <th>Prestasi yang diraih</th>
            <th>Info SMK Wikrama</th>


            <th width="280px">Action</th>
        </tr>
        @foreach ($pesertas as $peserta)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $peserta->nama_lengkap }}</td>
            <td>{{ $peserta->nama_panggilan }}</td>
            <td>{{ $peserta->jk}}</td>
            <td>{{ $peserta->tempat_lahir_siswa}}</td>
            <td>{{ $peserta->tgl_lahir_siswa }}</td>
            <td>{{ $peserta->agama }}</td>
            <td>{{ $peserta->cita_cita }}</td>
            <td>{{ $peserta->hoby }}</td>
            <td>{{ $peserta->anak_ke }}</td>
            <td>{{ $peserta->jumlah_saudara }}</td>
            <td>{{ $peserta->berat_badan }}</td>
            <td>{{ $peserta->tinggi_badan }}</td>
            <td>{{ $peserta->golongan_darah }}</td>
            <td>{{ $peserta->rt }}</td>
            <td>{{ $peserta->rw }}</td>
            <td>{{ $peserta->kelurahan}}</td>
            <td>{{ $peserta->kecamatan}}</td>
            <td>{{ $peserta->kota }}</td>
            <td>{{ $peserta->prov }}</td>
            <td>{{ $peserta->no_telp }}</td>
            <td>{{ $peserta->email }}</td>
            <td>{{ $peserta->bersama }}</td>
            <td>{{ $peserta->tbc }}</td>
            <td>{{ $peserta->malaria }}</td>
            <td>{{ $peserta->chotipa}}</td>
            <td>{{ $peserta->cacar}}</td>
            <td>{{ $peserta->lainnya}}</td>
            <td>{{ $peserta->kelainan }}</td>
            <td>{{ $peserta->nama_ayah }}</td>
            <td>{{ $peserta->tempat_lahir_ayah }}</td>
            <td>{{ $peserta->tgl_lahir_ayah }}</td>
            <td>{{ $peserta->pekerjaan_ayah }}</td>
            <td>{{ $peserta->negara_ayah }}</td>
            <td>{{ $peserta->agama_ayah }}</td>
            <td>{{ $peserta->no_ayah }}</td>
            <td>{{ $peserta->nama_ibu }}</td>
            <td>{{ $peserta->tempat_lahir_ibu }}</td>
            <td>{{ $peserta->tgl_lahir_ibu }}</td>
            <td>{{ $peserta->pekerjaan_ibu }}</td>
            <td>{{ $peserta->negara_ibu }}</td>
            <td>{{ $peserta->agama_ibu }}</td>
            <td>{{ $peserta->no_ibu }}</td>
            <td>{{ $peserta->nama_wali }}</td>
            <td>{{ $peserta->tempat_lahir_wali }}</td>
            <td>{{ $peserta->tgl_lahir_wali }}</td>
            <td>{{ $peserta->pekerjaan_wali }}</td>
            <td>{{ $peserta->negara_wali }}</td>
            <td>{{ $peserta->agama_wali }}</td>
            <td>{{ $peserta->no_wali }}</td>
            <td>{{ $peserta->pai_s1 }}</td>
            <td>{{ $peserta->pai_s2 }}</td>
            <td>{{ $peserta->pai_s3 }}</td>
            <td>{{ $peserta->pai_s4 }}</td>
            <td>{{ $peserta->pai_s5 }}</td>
            <td>{{ $peserta->indo_s1 }}</td>
            <td>{{ $peserta->indo_s2 }}</td>
            <td>{{ $peserta->indo_s3 }}</td>
            <td>{{ $peserta->indo_s4 }}</td>
            <td>{{ $peserta->indo_s5 }}</td>
            <td>{{ $peserta->ing_s1 }}</td>
            <td>{{ $peserta->ing_s2 }}</td>
            <td>{{ $peserta->ing_s3 }}</td>
            <td>{{ $peserta->ing_s4 }}</td>
            <td>{{ $peserta->ing_s5 }}</td>
            <td>{{ $peserta->mtk_s1 }}</td>
            <td>{{ $peserta->mtk_s2 }}</td>
            <td>{{ $peserta->mtk_s3 }}</td>
            <td>{{ $peserta->mtk_s4 }}</td>
            <td>{{ $peserta->mtk_s5 }}</td>
            <td>{{ $peserta->ipa_s1 }}</td>
            <td>{{ $peserta->ipa_s2 }}</td>
            <td>{{ $peserta->ipa_s3 }}</td>
            <td>{{ $peserta->ipa_s4 }}</td>
            <td>{{ $peserta->ipa_s5 }}</td>
            <td>{{ $peserta->ips_s1 }}</td>
            <td>{{ $peserta->ips_s2 }}</td>
            <td>{{ $peserta->ips_s3 }}</td>
            <td>{{ $peserta->ips_s4 }}</td>
            <td>{{ $peserta->ips_s5 }}</td>
            <td>{{ $peserta->prestasi }}</td>
            <td>{{ $peserta->info }}</td>
            <td>
                <form action="{{ route('pesertas.destroy',$peserta->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pesertas.show',$peserta->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pesertas.edit',$peserta->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pesertas->links() !!}
      
@endsection