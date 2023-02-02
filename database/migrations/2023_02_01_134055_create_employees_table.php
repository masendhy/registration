<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nik');
            $table->string('img_nik');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('ijazah');
            $table->string('img_ijazah');
            $table->string('no_hp');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('surat_sehat');
            $table->string('bpjs');
            $table->string('form_daftar');
            $table->string('surat_pernyataan');
            $table->string('foto');
            $table->string('sim');
            $table->enum('pelatihan', [
                'Operator Pesawat Angkat, Angkut dan Juru Ikat Beban Unit Rigger ',
                'Operator Pesawat Angkat, Angkut dan Juru Ikat Beban Unit Forklift',
                'Operator Keselamatan dan Kesehatan Kerja Minyak dan Gas Bumi',
                'Operator Scafolding',
                'Teknisi Instrumentasi Level - 1',
                'Juru Las ( Welder )',
                'Operator Lantai Perawatan Sumur'
            ]);
            $table->enum('periode', [
                '06 - 24 Maret 2023',
                '08 - 26 Maret 2023',
            ]);
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
        Schema::dropIfExists('employees');
    }
}
