<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class textmessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textmessage', function (Blueprint $table) {
            $table->Int('MessageId')->index();
            $table->timestamp('MessageTimeStamp')-> nullable();
			$table->string('MessageRiciver');
			$table->string('SentMessage');
								
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textmessage');
    }
}
