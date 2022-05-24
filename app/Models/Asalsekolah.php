<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Asalsekolah extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'asalsekolah';

    protected $fillable = [
        'no_ijazah_sma',
        'nama_sma',
        'alamat_sma',
        'kabupaten_sma',
        'telepon_sma',
        'kode_pos_sma',
        'id_mahasiswa'
    ];

    protected $hidden = [];
}
