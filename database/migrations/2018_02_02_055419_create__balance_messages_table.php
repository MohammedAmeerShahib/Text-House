<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalanceMessagesTable extends Migration
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
            $table->string('username');
            $table->string('ServiceProvider');
            $table->integer('Balance');
            $table->timestamps();
        });

        Schema::table('BalanceMessage', function($table)
        {
            $table->foreign('username')->unique()-> references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_balance_messages');
    }
}

