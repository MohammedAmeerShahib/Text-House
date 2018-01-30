<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubUser extends Migration
{
   public function up()
{
    Schema::create('userlistdetails', function (Blueprint $table) {
        $table->integer('SubUserId')->index();
        $table->string('UserName')->unique();
        $table->string('Password');
        $table->foreign('MainEnterprice')->references('EnterpriseUserName')->on('EnterpriseAccount');

    });
}
    public function down()
{
    Schema::dropIfExists('EnterpriseAccount');
}


}