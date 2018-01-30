<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogTalble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LogTalble', function (Blueprint $table) {
            $table->Int('LogId')->index();
            $table->string('LogUser');
			$table->string('LogTask');
			$table->string('LogDescription');
			$table->timestamp('LogTimestamp')-> nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LogTalble');
    }
}
