<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('Nama');
            $table->string('Tempat_TanggalLahir');
            $table->string('JenisKelamin');
            $table->string('GolonganDarah');
            $table->text('Alamat');
            $table->string('RT_RW');
            $table->string('Kel_Desa');
            $table->string('Kecamatan');
            $table->string('Agama');
            $table->string('StatusPerkawinan');
            $table->string('Pekerjaan');
            $table->string('Kewarganegaraan');
            $table->string('BerlakuHingga')->nullable();
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
        Schema::dropIfExists('penduduk');
    }
}
