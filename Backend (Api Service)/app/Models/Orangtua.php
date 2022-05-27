<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Orangtua extends Model
    {
        use HasFactory;
        use softDeletes;

        protected $table = 'orangtua';

        protected $fillable = [
            'nama_ayah',
            'nama_ibu',
            'alamat_orangtua',
            'pekerjaan_ayah',
            'penghasilan_ayah',
            'no_hp_ayah',
            'pekerjaan_ibu',
            'penghasilan_ibu',
            'no_hp_ibu',
            'jumlah_tanggungan',
            'nama_wali',
            'alamat_wali',
            'pekerjaan_wali',
            'penghasilan_wali',
            'no_hp_wali',
            'id_mahasiswa'


        ];

        protected $hidden = [];
}
