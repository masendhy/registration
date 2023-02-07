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
            $table->string('img_suket');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->enum('status', ['Lajang', 'Menikah']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('alamat_rumah');
            $table->enum('provinsi', [
                'Aceh',
                'Sumatera Utara',
                'Riau',
                'Kepulauan Riau',
                'Jambi',
                'Lampung',
                'Sumatera Selatan',
                'Jawa Barat',
                'Jawa Tengah',
                'Jawa Timur',
                'Kalimantan Selatan',
                'Kalimantan Tengah',
                'Kalimantan Timur',
                'Kalimantan Utara',
                'Sulawesi Selatan',
                'Sulawesi Tengah',
                'Maluku',
                'Papua',
                'Papua Barat',
                'NTT'
            ]);
            $table->enum('kota', [
                'Aceh Tamlang',
                'Aceh Utara',
                'Aceh Timur',
                'Langkat',
                'Deli Serdang',
                'Bengkalis',
                'Rokan Hilir',
                'Siak',
                'Kepulauan Meranti',
                'Dumai',
                'Kampar',
                'Indra Giri Hulu',
                'Rokan Hulu',
                'Pelawan',
                'Natuna',
                'Kepulauan Anambas',
                'Batanghari',
                'Tanjung Jabung Barat',
                'Muaro Jambi',
                'Tanjung Jabung Timur',
                'Sarolangun',
                'Kota Jambi',
                'Tebo',
                'Lampung Timur',
                'Musi Rawas Utara',
                'Banyuasin',
                'Musi Banyuasin',
                'Musi Rawas',
                'Ogan Ilir',
                'Muara Enim',
                'Ogan Komering Ulu',
                'Lahat',
                'Prabumulih',
                'Panukai Abab Lematang Ilir',
                "Indramayu",
                'Karawang',
                'Bekasi',
                'Subang',
                'Majalengka',
                'Blora',
                'Rembang',
                'Cilacap',
                'Sidoarjo',
                'Gresik',
                'Bojonegoro',
                'Tuban',
                'Bangkalan',
                'Sumenep',
                'Tabalong',
                'Barito Utara',
                'Penajam Paser Utara',
                'Kutai Timur',
                'Bontang',
                'Samarinda',
                'Kutai Kertanegara',
                'Balikpapan',
                'Bulungan',
                'Nunukan',
                'Tarakan',
                'Wajo',
                'Banggai',
                'Seram Bagian Timur',
                'Seram Bagian Barat',
                'Jayawijaya',
                'Nabire',
                'Teluk Bintuni',
                'Sorong',
                'Ngada',
                'Kupang'
            ]);
            $table->string('pendidikan');
            $table->string('img_ijazah');
            $table->bigInteger('no_hp');
            // $table->string('surat_sehat');
            // $table->string('bpjs');
            // $table->string('form_daftar');
            // $table->string('surat_pernyataan');
            $table->string('foto');
            $table->string('sim');
            $table->enum('pelatihan', [
                'JURU LAS (WELDER)',
                'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER ',
                'OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT',
                'OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI',
                'OPERATOR SCAFOLDING',
                'TEKNISI INSTRUMENTASI LEVEL - 1',
                'OPERATOR LANTAI PERAWATAN SUMUR',

            ]);
            $table->enum('periode', [
                "06 - 24 MARET 2023",
                "08 - 26 MEI 2023",
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
