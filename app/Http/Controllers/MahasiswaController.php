<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view ('mahasiswa.Dashboard', compact('user', $user));
    }

    public function materi()
    {
        return view ('mahasiswa.materi.index');
    }

    public function tugas()
    {
        return view ('mahasiswa.tugas.index');
    }
}
