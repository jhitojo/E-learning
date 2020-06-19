<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function matakuliah()
    {
        return view ('Matakuliah');
    }
}
