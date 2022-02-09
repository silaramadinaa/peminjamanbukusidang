<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjagas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_petugas')->unsigned();
            $table->string('nama_petugas');
            $table->string('alamat');
            $table->string('jk');
            $table->foreign('kode_petugas')->references('id')
                ->on('peminjamen')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('penjagas');
    }
}
