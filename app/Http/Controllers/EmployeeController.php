<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Periode;
// use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\DomPDF\PDF;
use App\Models\Employee;
use App\Models\Province;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {

            $data = Employee::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Employee::paginate(5);
        }


        $provinces = Province::all();
        $pelatihans = Pelatihan::all();
        $periodes = Periode::all();

        $jumlahpeserta = Employee::count();
        $jumlahpesertapria = Employee::where('jenis_kelamin', 'pria')->count();
        $jumlahpesertawanita = Employee::where('jenis_kelamin', 'wanita')->count();

        return view('datapeserta', compact('data', 'jumlahpeserta', 'jumlahpesertapria', 'jumlahpesertawanita', 'provinces', 'pelatihans', 'periodes'));
    }


    public function frame()
    {

        return view('/preview');
    }


    public function exportpdf()
    {
        $data = Employee::all();

        view()->share('data', $data);
        // $pdf = app('dompdf.wrapper');

        // //############ Permitir ver imagenes si falla ################################
        // $contxt = stream_context_create([
        //     'ssl' => [
        //         'verify_peer' => FALSE,
        //         'verify_peer_name' => FALSE,
        //         'allow_self_signed' => TRUE,
        //     ]
        // ]);

        // $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        // $pdf->getDomPDF()->setHttpContext($contxt);



        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('peserta-pdf');

        return $pdf->download('data.pdf');
    }


    public function exportexcel()
    {
        return Excel::download(new EmployeeExport, 'peserta.xlsx');
    }
}
