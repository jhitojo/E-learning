<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes;
    Protected $table = 'mahasiswa';
    Protected $fillable = ['nama', 'nim', 'kelas', 'jurusan', 'email'];
}
