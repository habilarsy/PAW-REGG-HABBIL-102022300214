<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => 'habbil',
            'nim' => '102022300214',
            'email' => 'habilarsy@student.telkomuniversity.ac.id',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => 'images/12345-ed.jpg',

        ];

        return view('profil' , ['mahasiswa' => $mahasiswa]);
    }
}
