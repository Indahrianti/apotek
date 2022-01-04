<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeretasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keretas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_KA');
            $table->bigInteger('asal_id')->unsigned();
            $table->foreign('asal_id')->references('id')->on('asals');
            $table->bigInteger('tujuan_id')->unsigned();
            $table->foreign('tujuan_id')->references('id')->on('tujuans');

            $table->timestamps();


            // fk author_id
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keretas');
    }
}
