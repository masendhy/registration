<?php

namespace App\Models;

use App\Models\Periode;
use App\Models\Regency;
use App\Models\Province;
use App\Models\Pelatihan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $guarded = [];


    public function pelatihans()
    {
        return $this->belongsTo(Pelatihan::class, 'pelatihan', 'id');
    }
    public function periodes()
    {
        return $this->belongsTo(Periode::class, 'periode', 'id');
    }
    public function provincies()
    {
        return $this->belongsTo(Province::class, 'provinsi', 'id');
    }
    public function regencies()
    {
        return $this->belongsTo(Regency::class, 'kota', 'id');
    }

   
}
