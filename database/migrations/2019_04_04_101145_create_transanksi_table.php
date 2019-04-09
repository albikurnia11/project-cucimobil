<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransanksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transanksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_nota');
            $table->string('jenis');
            $table->string('nama');
            $table->integer('bayar');
            $table->integer('kembali');
            $table->integer('total');
            $table->date('tanggal');
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
        Schema::dropIfExists('transanksi');
    }
}
