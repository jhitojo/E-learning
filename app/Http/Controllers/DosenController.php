<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DosenController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view ('dosen.Dashboard', compact('user', $user));
    }

    public function materi()
    {
        return view ('dosen.materi.index');
    }

    public function tugas()
    {
        return view ('dosen.tugas.index');
    }
    
}
