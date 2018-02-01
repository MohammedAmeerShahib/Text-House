<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;

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
            $table->increments('EnterpriseId')->index();
            $table->string('EnterpriseName');
            $table->string('EnterpriseAddress');
            $table->string('EnterpriseContactnumber');
            $table->string('EnterpriseEmail');

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
