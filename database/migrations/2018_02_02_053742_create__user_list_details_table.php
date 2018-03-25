<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserListDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userlistdetails', function (Blueprint $table) {
            $table->increments('ListId')->index();
            $table->integer('userId')->unsigned();
            $table->string('ListName');
            $table->string('ListSize')->default(0);
            $table->timestamps();

        });


        Schema::table('userlistdetails', function($table)
        {
            $table->unique( array('userId','ListName') );
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_user_list_details');
    }
}
