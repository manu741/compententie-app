<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituutTable extends Migration
{
    public function up()
    {
        Schema::create('instituut', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('instituutnaamkort')->nullable()->default('NULL');
		$table->string('instituutnaamlang')->nullable()->default('NULL');
		$table->char('trial267',1)->nullable()->default('NULL');
		$table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('instituut');
    }
}