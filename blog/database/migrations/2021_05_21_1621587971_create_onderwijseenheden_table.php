<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnderwijseenhedenTable extends Migration
{
    public function up()
    {
        Schema::create('onderwijseenheden', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('curriculum')->nullable()->default('NULL');
		$table->string('onderwijseenheid')->nullable()->default('NULL');
		$table->string('vorm')->nullable()->default('NULL');
		$table->string('fase')->nullable()->default('NULL');
		$table->string('type')->nullable()->default('NULL');
		$table->integer('ects',11)->nullable()->default('NULL');
		$table->integer('studiejaar',11)->nullable()->default('NULL');
		$table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('onderwijseenheden');
    }
}