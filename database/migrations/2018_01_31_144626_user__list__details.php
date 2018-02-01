<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserListDetails extends Migration
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
            $table->foreign('username')->references('username')->on('users');
            $table->string('ListName');
            $table->string('ListCreatedDate');
            $table->string('ListLastModified');
            $table->string('ListSize');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userlistdetails');
    }
}
