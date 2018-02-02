<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textmessage', function (Blueprint $table) {
            $table->increments('MessageId')->index();
            $table->string('username');
            $table->timestamp('MessageTimeStamp')->timestamps();
            $table->string('MessageReceiver');
            $table->string('SentMessage');
            $table->timestamps();
        });

        Schema::table('textmessage', function($table)
        {
            $table->foreign('username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_text_messages');
    }
}
