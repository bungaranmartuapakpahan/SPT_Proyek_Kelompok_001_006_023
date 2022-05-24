<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkademisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akademis', function (Blueprint $table) {
            $table->id();
            $table->string('status_akhir');
            $table->integer('angkatan');
            $table->string('user_name');
            $table->string('email');
            $table->string('program_studi');
            $table->string('kelas');
            $table->string('wali_mahasiswa');
            $table->string('jalur_usm');
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
        Schema::dropIfExists('akademis');
    }
}
