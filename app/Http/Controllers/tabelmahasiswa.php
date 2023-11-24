<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class tabelmahasiswa extends Controller
{
    public function tabelmahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view('TabelMahasiswa',['mahasiswa'=>$mahasiswa]);
    }
}
