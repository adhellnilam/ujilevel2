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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100);
            $table->string('nipd',100);
            $table->unsignedBigInteger('mapel_id')->require();
            $table->foreign('mapel_id')->references('id')->on('mata_pelajaran')->onDelete('restrict');
            $table->string('nomor_telepon',100);
            $table->string('alamat',100);
            $table->enum('jenis_kelamin',['Perempuan','Laki-Laki']);
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
        Schema::dropIfExists('guru');
    }
};
