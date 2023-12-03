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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nim');
            $table->enum('gender', ['L', 'P']);
            $table->string('konsentrasi');
            $table->string('asal');
            $table->unsignedBigInteger('matkul_id')->default(1); // Ganti 1 dengan nilai default yang sesuai
            $table->foreign('matkul_id')->references('id')->on('matakuliahs'); // Definisi foreign key
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
        Schema::dropIfExists('mahasiswas');
    }
};
