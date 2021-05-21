<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapuntenTable extends Migration
{
    public function up()
    {
        Schema::create('datapunten', function (Blueprint $table) {

		$table->string('popcyclus')->nullable()->default('NULL');
		$table->string('datapuntnaam')->nullable()->default('NULL');
		$table->integer('datapuntid',11)->nullable()->default('NULL');
		$table->datetime('dpaanmaakdatum')->nullable()->default('NULL');
		$table->tinyInteger('dpbevroren',1)->nullable()->default('NULL');
		$table->string('onderwijseenheid')->nullable()->default('NULL');
		$table->string('opdrachtgever')->nullable()->default('NULL');
		$table->string('beroepsproduct')->nullable()->default('NULL');
		$table->string('competentie');
		$table->string('niveau');
		;
		->nullable()->default('NULL');
		$table->string('assessor')->nullable()->default('NULL');
		->nullable()->default('NULL');
		->nullable()->default('NULL');
		->nullable()->default('NULL');
		->nullable()->default('NULL');
		->nullable()->default('NULL');
		->nullable()->default('NULL');
		->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('datapunten');
    }
}