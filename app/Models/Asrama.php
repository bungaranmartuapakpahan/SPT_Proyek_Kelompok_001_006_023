<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asrama extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'asrama';
    protected $fillable = [
        'nama_asrama',
        'kamar',
        'pengurus_asrama',
        'nilai_asrama',
        'id_mahasiswa'

    ];

    protected $hidden = [];
}
