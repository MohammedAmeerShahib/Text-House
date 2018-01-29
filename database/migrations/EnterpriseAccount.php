<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnterpriseAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EnterpriseAccount', function (Blueprint $table) {
            $table->string('EnterpriseUserName')->index();
            $table->string('CompanyName');
			$table->string('CompanyAddress');
			$table->string('CompanyContactnumber');
			$table->string('CompanyEmail');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EnterpriseAccount');
    }
}
