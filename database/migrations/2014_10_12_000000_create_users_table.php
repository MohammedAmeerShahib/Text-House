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
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('User_type');
            $table->integer('EnterpriseId')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function($table)
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

    public  function isAdmin(){

        if(User_type=='Admin'){

            return true;
        }else{

            return false;
        }
    }
}
