<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function materi()
    {
        return view ('Materi');
    }
}
