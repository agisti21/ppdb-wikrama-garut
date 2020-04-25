<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jk');
            $table->string('tempat_lahir_siswa');
            $table->string('tgl_lahir_siswa');
            $table->string('agama');
            $table->string('cita_cita');
            $table->string('hoby');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('golongan_darah');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('prov');
            $table->string('no_telp');
            $table->string('email');
            $table->string('bersama');
            $table->string('tbc');
            $table->string('malaria');
            $table->string('chotipa');
            $table->string('cacar');
            $table->string('lainnya');
            $table->string('kelainan');
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->string('tgl_lahir_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('negara_ayah');
            $table->string('agama_ayah');
            $table->string('no_ayah');
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->string('tgl_lahir_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('negara_ibu');
            $table->string('agama_ibu');
            $table->string('no_ibu');
            $table->string('nama_wali');
            $table->string('tempat_lahir_wali');
            $table->string('tgl_lahir_wali');
            $table->string('pekerjaan_wali');
            $table->string('pendidikan_wali');
            $table->string('negara_wali');
            $table->string('agama_wali');
            $table->string('no_wali');
            $table->integer('pai_s1');
            $table->integer('pai_s2');
            $table->integer('pai_s3');
            $table->integer('pai_s4');
            $table->integer('pai_s5');
            $table->integer('indo_s1');
            $table->integer('indo_s2');
            $table->integer('indo_s3');
            $table->integer('indo_s4');
            $table->integer('indo_s5');
            $table->integer('ing_s1');
            $table->integer('ing_s2');
            $table->integer('ing_s3');
            $table->integer('ing_s4');
            $table->integer('ing_s5');
            $table->integer('mtk_s1');
            $table->integer('mtk_s2');
            $table->integer('mtk_s3');
            $table->integer('mtk_s4');
            $table->integer('mtk_s5');
            $table->integer('ipa_s1');
            $table->integer('ipa_s2');
            $table->integer('ipa_s3');
            $table->integer('ipa_s4');
            $table->integer('ipa_s5');
            $table->integer('ips_s1');
            $table->integer('ips_s2');
            $table->integer('ips_s3');
            $table->integer('ips_s4');
            $table->integer('ips_s5');
            $table->string('prestasi');
            $table->string('info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
}
