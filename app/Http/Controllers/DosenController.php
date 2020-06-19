<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dosen()
    {
        return view ('Dosen');
    }
}
