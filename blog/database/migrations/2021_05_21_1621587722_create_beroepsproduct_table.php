<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeroepsproductTable extends Migration
{
    public function up()
    {
        Schema::create('beroepsproduct', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('beroepsproduct')->nullable()->default('NULL');
		$table->string('beschrijving')->nullable()->default('NULL');
		$table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('beroepsproduct');
    }
}