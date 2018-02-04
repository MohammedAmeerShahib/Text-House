<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterpriseAccountsTable extends Migration
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_enterprise_accounts');
    }

}
