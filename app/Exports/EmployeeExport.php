<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class EmployeeExport implements FromCollection, WithHeadings, ShouldAutoSize,WithMapping
{

   
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Employee::with('pelatihans')->get();

        // return Employee::all();
    }

    public function headings(): array
    {
        return [
            'id', 'nama', 'nik', 'img_nik', 'img_suket', 'jenis_kelamin', 'status', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat_rumah', 'provinsi', 'kota', 'pendidikan', 'img_ijazah', 'no_hp', 'foto', 'sim', 'pelatihan', 'periode', 'created_at',
            'updated_at',
        ];
    }

    public function map($employee): array
    {
        return[
            $employee->id,
            $employee->nama,
            $employee->nik,
            $employee->img_nik,
            $employee->img_suket,
            $employee->jenis_kelamin,
            $employee->status,
            $employee->tempat_lahir,
            $employee->tanggal_lahir,
            $employee->agama,
            $employee->alamat_rumah,
            $employee->provincies->name,
            $employee->regencies->name,
            $employee->pendidikan,
            $employee->img_ijazah,
            $employee->no_hp,
            $employee->foto,
            $employee->sim,
            $employee->pelatihans->pelatihan,
            $employee->periodes->name,
            $employee->created_at,
            $employee->updated_at,
        ];
    }
    
}
