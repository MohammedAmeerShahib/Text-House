<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
=======

>>>>>>> c6b5ca7e34b6397e9319833758482dd543b116c5
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('User_type');
            $table->foreign('EnterpriseId')->references('EnterpriseId')->on('EnterpriseAccount');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::tabel('users', function($table)
        {
            $table->foreign('EnterpriseId')->references('EnterpriseId')->on('EnterpriseAccount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
