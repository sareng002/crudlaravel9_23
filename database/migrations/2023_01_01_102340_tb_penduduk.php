<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('kk', 16);
            $table->string('nama', 100);
            $table->string('kelamin', 20);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir', 20);
            $table->string('alamat');
            $table->string('agama', 150);
            $table->string('pekerjaan');
            $table->string('pendidikan')->nullable();
            $table->string('shdk');
            $table->string('jenis_rumah')->nullable();
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
        Schema::dropIfExists('tb_penduduk');
    }
};
