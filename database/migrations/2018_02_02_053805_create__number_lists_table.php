<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NumberList', function (Blueprint $table) {

            $table->integer('ListId')->unsigned();
            $table->string('NLNumber');
            $table->timestamps();

        });
        Schema::table('NumberList', function($table)
        {
            $table->unique( array('ListId','NLNumber') );
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
        Schema::dropIfExists('_number_lists');
    }
}

