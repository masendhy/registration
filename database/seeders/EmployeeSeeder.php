<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'masendhy',
            'jenis_kelamin' => 'Laki-laki',
            'ijazah' => 'x1212312313',
            'no_hp' => 1234567898898,
            'provinsi' => 'Jawa Tengah',
            'kota' => 'solo',
            'surat_sehat' => 'sksehat',
            'bpjs' => 'bpjs',
            'form_daftar' => 'form',
            'surat_pernyataan' => 'nyata',
            'foto' => 'foto',
            'sim' => 'sim1234',
            'pelatihan' => 'Operator Scafolding',
            'periode' => '06 - 24 Maret 2023',

        ]);
    }
}
