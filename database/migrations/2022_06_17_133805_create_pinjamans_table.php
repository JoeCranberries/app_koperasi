<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamans', function (Blueprint $table) {
            $table->id();
            $table->integer('agen_id')->unsigned();
            $table->integer('jumlah');
            $table->integer('peminjam_id')->unsigned();
            $table->char('jangka_waktu', 2);
            $table->integer('bayar_perbulan');
            $table->enum('status', ['pending', 'belum_lunas', 'lunas']);
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
        Schema::dropIfExists('pinjamans');
    }
}
