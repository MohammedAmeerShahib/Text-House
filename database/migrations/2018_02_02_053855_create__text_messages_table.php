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
            $table->integer('userId')->unsigned();
            $table->timestamp('MessageTimeStamp')->timestamps();
            $table->string('MessageReceiver');
            $table->string('SentMessage');
            $table->string('Status');
            $table->timestamps();
        });

        Schema::table('textmessage', function($table)
        {
            $table->foreign('userId')->references('id')->on('users');
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
