<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BalanceMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BalanceMessage', function (Blueprint $table) {
            $table->increments('MessageId')->index();
            $table->foreign('username')->unique()-> references('username')->on('users');
            $table->string('ServiceProvider');
            $table->integer('Balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BalanceMessage');
    }
}
