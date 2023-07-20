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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100);
            $table->string('nis',100);
            $table->unsignedBigInteger('kelas_id')->require();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('restrict');
            $table->string('alamat',400);
            $table->string('nomor_telepon',100);
            $table->enum('jenis_kelamin',['Perempuan','Laki-Laki']);
            $table->string('point',100);
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
        Schema::dropIfExists('siswa');
    }
};
