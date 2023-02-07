<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Employee;
// use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;



class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {

            $data = Employee::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Employee::paginate(5);
        }

        $jumlahpeserta = Employee::count();
        $jumlahpesertapria = Employee::where('jenis_kelamin', 'pria')->count();
        $jumlahpesertawanita = Employee::where('jenis_kelamin', 'wanita')->count();

        return view('datapeserta', compact('data', 'jumlahpeserta', 'jumlahpesertapria', 'jumlahpesertawanita'));
    }



    public function exportpdf()
    {
        $data = Employee::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('peserta-pdf');

        return $pdf->download('data.pdf');
    }


    public function exportexcel()
    {
        return Excel::download(new EmployeeExport, 'peserta.xlsx');
    }
}
