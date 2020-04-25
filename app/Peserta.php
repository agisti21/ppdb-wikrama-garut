<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
        'no_pendaftaran','no_tes','jalur_penerimaan','nama_lengkap', 'nama_panggilan','jk','tempat_lahir_siswa','tgl_lahir_siswa','agama','cita_cita','hoby','anak_ke','jumlah_saudara','berat_badan','tinggi_badan','golongan_darah',
        'rt','rw','kelurahan','kecamatan','kota','prov','no_telp','email','bersama',
        'tbc','malaria','chotipa','cacar','lainnya','kelainan',
        'nama_ayah','tempat_lahir_ayah','tgl_lahir_ayah','pekerjaan_ayah','pendidikan_ayah','negara_ayah','agama_ayah','no_ayah',
        'nama_ibu','tempat_lahir_ibu','tgl_lahir_ibu','pekerjaan_ibu','pendidikan_ibu','negara_ibu','agama_ibu','no_ibu',
        'nama_wali','tempat_lahir_wali','tgl_lahir_wali','pekerjaan_wali','pendidikan_wali','negara_wali','agama_wali','no_wali',
        'pai_s1','pai_s2','pai_s3','pai_s4','pai_s5',
        'indo_s1','indo_s2','indo_s3','indo_s4','indo_s5',
        'ing_s1','ing_s2','ing_s3','ing_s4','ing_s5',
        'mtk_s1','mtk_s2','mtk_s3','mtk_s4','mtk_s5',
        'ipa_s1','ipa_s2','ipa_s3','ipa_s4','ipa_s5',
        'ips_s1','ips_s2','ips_s3','ips_s4','ips_s5',
        'prestasi','info'
        
    ];
}
