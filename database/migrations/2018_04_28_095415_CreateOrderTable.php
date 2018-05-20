<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->integer('no_hp');
            $table->date('deadline');
            $table->integer('pembayaran');
            $table->boolean('bahan');
            $table->boolean('potong');
            $table->boolean('sablon');
            $table->boolean('jahit');
            $table->boolean('press');
            $table->boolean('finishing');
            $table->boolean('quality_control');
            $table->boolean('konfirmasi');
            $table->boolean('ambil');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
