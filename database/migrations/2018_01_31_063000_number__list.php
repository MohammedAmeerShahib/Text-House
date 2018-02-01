<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class NumberList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NumberList', function (Blueprint $table) {

           // $table->foreign('ListId')->references('ListId')->on('userlistdetails');
            $table->string('NLNumber');

        });
        Schema::tabel('NumberList', function($table)
        {
            $table->foreign('ListId')->references('ListId')->on('userlistdetails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NumberList');
    }
}
