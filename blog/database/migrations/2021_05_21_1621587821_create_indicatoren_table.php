<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorenTable extends Migration
{
    public function up()
    {
        Schema::create('indicatoren', function (Blueprint $table) {

		$table->string('curriculum')->nullable()->default('NULL');
		$table->string('competentie')->nullable()->default('NULL');
		$table->integer('niveau',11)->nullable()->default('NULL');
		->nullable()->default('NULL');
		$table->char('trial264',1)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('indicatoren');
    }
}