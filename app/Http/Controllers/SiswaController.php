<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        return "Berhasil Memproses Data";
    }

    public function insertSiswa()
    {
        $result = DB::insert("INSERT INTO siswas(nipd,tempat_lahir,tanggal_lahir,kelas,jurusan) VALUES('12233','Depok','12-12-12','XII RPL 2','RPL')");
        dump($result);

        
    }
}
