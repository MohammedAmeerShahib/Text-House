<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class SubUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SubUser', function (Blueprint $table) {
            $table->increments('SubUserId')->index();
            $table->integer('EnterpriseId')->unsigned();
            $table->string('SubUserName')->unique();

        });

        Schema::table('SubUser', function($table)
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
        Schema::dropIfExists('EnterpriseAccount');
    }
}
