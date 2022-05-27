<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangtuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtua', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_orangtua');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->bigInteger('no_hp_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->bigInteger('no_hp_ibu');
            $table->bigInteger('jumlah_tanggungan');
            $table->string('nama_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            $table->bigInteger('no_hp_wali')->nullable();
            $table->integer('id_mahasiswa');


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orangtua');
    }
}
