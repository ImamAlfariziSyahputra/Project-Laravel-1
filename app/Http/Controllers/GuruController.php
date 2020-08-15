<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function cekKoneksi()
    {
        $guru = new Guru;
        dump($guru);
    }
    public function simpanGuru()
    {
        $guru = new Guru;
        $guru->nik = "3434343";
        $guru->nama = "Agus Diana";
        $guru->tanggal_lahir = "2000-11-28";
        $guru->alamat = "Gak tau dimana";
        $guru->save();
        dump($guru);
    }
    public function updateGuru()
    {
        $guru = Guru::find(1);
        $guru->nik = "777777";
        $guru->nama = "Puguh Rismadi Aja";
        $guru->tanggal_lahir = "2003-11-28";
        $guru->alamat = "Jonggol";
        $guru->save();
        dump($guru);
    }

    public function deleteGuru()
    {
        $guru = Guru::find(1);
        $guru->delete();

        dump($guru);
    }
    public function getAllGuru()
    {
        $result = Guru::all();

        dump($guru);
    }
    public function getGuruById()
    {
        $result = Guru::find(2);

        dump($result);
    }

    
}
