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
            $table->increments('id')->index();
            $table->integer('userId')->unique()->unsigned();
            $table->integer('DialogBalance')->default(0);
            $table->integer('MobitelBalance')->default(0);
            $table->integer('AirtelBalance')->default(0);
            $table->integer('EtisalatBalance')->default(0);
            $table->timestamps();
        });

        Schema::table('BalanceMessage', function($table)
        {
            $table->foreign('userId')-> references('id')->on('users');
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

