<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginprocess(Request $request)
    {
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect('peserta');
        }
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('datapeserta');
        // };
        return back()->with('loginError', 'username atau password salah');
    }

    public function user()
    {
        return view('user');
    }

    public function usercreate(Request $request)
    {
        // dd('sudah OK');
        //d($request->all());


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)

        ]);

        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function registeruser(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama' => 'required | unique:employees',
                'nik' => 'required | unique:employees',
                'img_nik' => 'required',
                'jenis_kelamin' => 'required|not_in:0',
                'status' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'agama' => 'required',
                'alamat_rumah' => 'required',
                'provinsi' => 'required|not_in:0',
                'kota' => 'required|not_in:0',
                'pendidikan' => 'required',
                'img_ijazah' => 'required',
                'no_hp' => 'required | unique:employees',
                'foto' => 'required',
                'pelatihan' => 'required|not_in:0',
                'sim' => 'required',
                'periode' => 'required|not_in:0',


            ],
            [
                'nama.required' => 'Nama Lengkap Harus Diisi',
                'nik.required' => 'NIK Harus Diisi ',
                'img_nik.required' => 'Upload KTP Harus Diisi',
                'jenis_kelamin.required' => 'Jenis Kelamin Harus Diisi',
                'status.required' => 'Status Harus Diisi',
                'tempat_lahir.required' => 'Tempat Lahir Harus Diisi',
                'tanggal_lahir.required' => 'Tanggal Lahir Harus Diisi',
                'agama.required' => 'Agama Harus Diisi',
                'alamat_rumah.required' => 'Alamat Rumah Harus Diisi',
                'provinsi.required' => 'Provinsi Harus Diisi',
                'kota.required' => 'Kabupaten / Kota Harus Diisi',
                'pendidikan.required' => 'Pendidikan Harus Diisi',
                'img_ijazah.required' => 'Upload Ijazah Harus Diisi',
                'no_hp.required' => 'Nomor HP dan WA Harus Diisi',
                'foto.required' => 'Upload Pas Foto Harus Diisi',
                'pelatihan.required' => 'Pelatihan Harus Diisi',
                'sim.required' => 'Upload SIM Harus Diisi',
                'periode.required' => 'Periode Pelatihan Harus Diisi',
                'nama.unique' => 'Nama Lengkap Sudah Dipakai',
                'nik.unique' => 'NIK Sudah Dipakai',
                'no_hp.unique' => 'Nomor HP dan WA Sudah Dipakai'

            ],

        );


        $data = Employee::create($request->all());

        if ($request->file('img_nik')) {
            $fileName = pathinfo($request->file('img_nik')->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $data->nama . '.' . $request->file('img_nik')->getClientOriginalExtension();
            $request->file('img_nik')->move('KTP/', $fileName, 'public');

            $data->update([
                'img_nik' => $fileName ?? null,
            ]);
        }

        // if ($request->hasFile('img_nik')) {
        //     $request->file('img_nik')->move('KTP/', $request->file('img_nik')->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $data->img_nik = $request->file('img_nik')->getClientOriginalName();
        //     $data->save();
        // }

        if ($request->file('img_ijazah')) {
            $fileName = pathinfo($request->file('img_ijazah')->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $data->nama . '.' . $request->file('img_ijazah')->getClientOriginalExtension();
            $request->file('img_ijazah')->move('IJAZAH/', $fileName, 'public');

            $data->update([
                'img_ijazah' => $fileName ?? null,
            ]);
        }


        // if ($request->hasFile('img_ijazah')) {
        //     $request->file('img_ijazah')->move('IJAZAH/', $request->file('img_ijazah')->getClientOriginalName());
        //     $data->img_ijazah = $request->file('img_ijazah')->getClientOriginalName();
        //     $data->save();
        // }
        // if ($request->hasFile('surat_sehat')) {
        //     $request->file('surat_sehat')->move('SEHAT/', $request->file('surat_sehat')->getClientOriginalName());
        //     $data->surat_sehat = $request->file('surat_sehat')->getClientOriginalName();
        //     $data->save();
        // }
        // if ($request->hasFile('bpjs')) {
        //     $request->file('bpjs')->move('BPJS/', $request->file('bpjs')->getClientOriginalName());
        //     $data->bpjs = $request->file('bpjs')->getClientOriginalName();
        //     $data->save();
        // }
        // if ($request->hasFile('form_daftar')) {
        //     $request->file('form_daftar')->move('DAFTAR/', $request->file('form_daftar')->getClientOriginalName());
        //     $data->form_daftar = $request->file('form_daftar')->getClientOriginalName();
        //     $data->save();
        // }
        // if ($request->hasFile('surat_pernyataan')) {
        //     $request->file('surat_pernyataan')->move('PERNYATAAN/', $request->file('surat_pernyataan')->getClientOriginalName());
        //     $data->surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalName();
        //     $data->save();
        // }

        if ($request->file('foto')) {
            $fileName = pathinfo($request->file('foto')->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $data->nama . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move('FOTO/', $fileName, 'public');

            $data->update([
                'foto' => $fileName ?? null,
            ]);
        }

        // if ($request->hasFile('foto')) {
        //     $request->file('foto')->move('FOTO/', $request->file('foto')->getClientOriginalName());
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        if ($request->file('sim')) {
            $fileName = pathinfo($request->file('sim')->getClientOriginalName(), PATHINFO_FILENAME) . '-' . $data->nama . '.' . $request->file('sim')->getClientOriginalExtension();
            $request->file('sim')->move('SIM/', $fileName, 'public');

            $data->update([
                'sim' => $fileName ?? null,
            ]);
        }

        // if ($request->hasFile('sim')) {
        //     $request->file('sim')->move('SIM/', $request->file('sim')->getClientOriginalName());
        //     $data->sim = $request->file('sim')->getClientOriginalName();
        //     $data->save();
        // }
        return redirect('/');

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

    }
}
