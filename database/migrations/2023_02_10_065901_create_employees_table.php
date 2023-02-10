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
            $table->string('nik');
            $table->string('img_nik');
            $table->string('img_suket');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('status', ['Lajang', 'Menikah']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('alamat_rumah');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('pendidikan');
            $table->string('img_ijazah');
            $table->string('no_hp');
            $table->string('foto');
            $table->string('sim');
            $table->string('pelatihan');
            $table->string('periode');
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
