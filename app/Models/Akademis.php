<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Akademis extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'akademis';
    protected $fillable = [
        'status_akhir',
        'angkatan',
        'user_name',
        'email',
        'program_studi',
        'kelas',
        'wali_mahasiswa',
        'jalur_usm',
        'id_mahasiswa'

    ];

    protected $hidden = [];

}
