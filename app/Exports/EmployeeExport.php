<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Employee::all();
    }

    public function headings(): array
    {
        return [
            'id', 'nama', 'nik', 'img_nik', 'jenis_kelamin', 'status', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat_rumah', 'provinsi', 'kota', 'pendidikan', 'img_ijazah', 'no_hp', 'foto', 'sim', 'pelatihan', 'periode', 'created_at',
            'updated_at',
        ];
    }
}
