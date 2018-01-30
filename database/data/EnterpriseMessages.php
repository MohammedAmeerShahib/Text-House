<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnterpriseMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EnterpriseMessages', function (Blueprint $table) {
            $table->foreign('MainEnterprice')->unique()-> references('EnterpriseUserName')->on('EnterpriseAccount');
            $table->string('ServiceProvider');
            $table->string('Balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EnterpriseMessages');
    }
}
