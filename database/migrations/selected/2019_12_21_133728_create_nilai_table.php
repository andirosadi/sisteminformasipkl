<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
//            aspek teknis
            $table->integer('penulisanlaporan');
            $table->integer('penguasaanmateri');
            $table->integer('penyelesaianmakalah');
            $table->integer('kemampuananalisa');
//            aspek non teknis
            $table->integer('tanggungjawab');
            $table->integer('kehadiran');
            $table->integer('sikap');
            $table->integer('pengetahuan');
            $table->integer('inisiatif');
            $table->integer('kerjasama');
            $table->integer('kepemimpinan');
            $table->integer('potensi');
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
        Schema::dropIfExists('nilai');
    }
}
