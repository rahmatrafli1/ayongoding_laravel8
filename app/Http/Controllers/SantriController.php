<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    //
    public function index()
    {
        $nama = 'www.laravelapp.com';
        return view('santri', ['nama' => $nama]);
    }

    public function biodata()
    {
        $nama = 'www.laravelapp.com';
        $mata_pelajaran = ['Laravel', 'Pemrograman Web', 'Basis Data'];
        return view('biodata', ['nama' => $nama, 'mapel' => $mata_pelajaran]);
    }

    public function getNama($nama)
    {
        return $nama;
    }

    public function pendaftaran()
    {
        return view('pendaftaran');
    }

    public function proses(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        return 'Nama: ' . $nama . ', Alamat: ' . $alamat;
    }
}
