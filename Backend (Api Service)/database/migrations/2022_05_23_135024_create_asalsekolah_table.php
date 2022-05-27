<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsalsekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asalsekolah', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_ijazah_sma');
            $table->string('nama_sma');
            $table->string('alamat_sma');
            $table->string('kabupaten_sma')->nullable();
            $table->bigInteger('telepon_sma')->nullable();
            $table->bigInteger('kode_pos_sma')->nullable();
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
        Schema::dropIfExists('asalsekolah');
    }
}
