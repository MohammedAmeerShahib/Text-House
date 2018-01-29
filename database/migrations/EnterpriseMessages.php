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
            $table->intiger('Id')->index();
            $table->string('ServiceProvider');
            $table->string('Ballance');
            $table->foreign('MainEnterprice')->references('EnterpriseUserName')->on('EnterpriseAccount');
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
