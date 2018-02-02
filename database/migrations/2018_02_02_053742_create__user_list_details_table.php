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
            $table->string('username');
            $table->string('ListName');
            $table->string('ListCreatedDate')->timestamps();
            $table->string('ListLastModified')->timestamps();
            $table->string('ListSize');
            $table->timestamps();

        });


        Schema::table('userlistdetails', function($table)
        {
            $table->foreign('username')->references('username')->on('users');
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
