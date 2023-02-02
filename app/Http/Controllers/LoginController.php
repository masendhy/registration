<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registeruser(Request $request)
    {
        $data = Employee::create($request->all());
        if ($request->hasFile('img_nik')) {
            $request->file('img_nik')->move('KTP/', $request->file('img_nik')->getClientOriginalName());
            $data->img_nik = $request->file('img_nik')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('img_ijazah')) {
            $request->file('img_ijazah')->move('IJAZAH/', $request->file('img_ijazah')->getClientOriginalName());
            $data->img_ijazah = $request->file('img_ijazah')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('surat_sehat')) {
            $request->file('surat_sehat')->move('SEHAT/', $request->file('surat_sehat')->getClientOriginalName());
            $data->surat_sehat = $request->file('surat_sehat')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('bpjs')) {
            $request->file('bpjs')->move('BPJS/', $request->file('bpjs')->getClientOriginalName());
            $data->bpjs = $request->file('bpjs')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('form_daftar')) {
            $request->file('form_daftar')->move('DAFTAR/', $request->file('form_daftar')->getClientOriginalName());
            $data->form_daftar = $request->file('form_daftar')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('surat_pernyataan')) {
            $request->file('surat_pernyataan')->move('PERNYATAAN/', $request->file('surat_pernyataan')->getClientOriginalName());
            $data->surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('FOTO/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('sim')) {
            $request->file('sim')->move('SIM/', $request->file('sim')->getClientOriginalName());
            $data->sim = $request->file('sim')->getClientOriginalName();
            $data->save();
        }
        return redirect('welcome');

        // Employee::create([
        //     'nama' => $request->nama,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'ijazah' => $request->ijazah,
        //     'no_hp' => $request->no_hp,
        //     'propinsi' => $request->propinsi,
        //     'kota' => $request->kota,
        //     'surat_sehat' => $request->surat_sehat,
        //     'bpjs' => $request->bpjs,
        //     'form_daftar' => $request->form_daftar,
        //     'surat_pernyataan' => $request->surat_pernyataan,
        //     'foto' => $request->foto,
        //     'sim' => $request->sim,
        //     'pelatihan' => $request->pelatihan,
        //     'periode' => $request->periode,

        // ]);

        return redirect('/welcome');
    }
}
