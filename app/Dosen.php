<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{
    use SoftDeletes;
    Protected $table = 'dosen';
    Protected $fillable = ['nama', 'nik', 'prodi', 'fakultas', 'email'];
}
