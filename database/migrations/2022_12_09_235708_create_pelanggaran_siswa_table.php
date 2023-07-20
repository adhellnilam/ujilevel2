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
        Schema::create('pelanggaran_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id')->require();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('restrict');
            $table->unsignedBigInteger('pelanggaran_id')->require();
            $table->foreign('pelanggaran_id')->references('id')->on('pelanggaran')->onDelete('restrict');
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
        Schema::dropIfExists('pelanggaran_siswa');
    }
};
