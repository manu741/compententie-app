<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerworvencompetentiesTable extends Migration
{
    public function up()
    {
        Schema::create('verworvencompetenties', function (Blueprint $table) {

		$table->string('popcyclus')->nullable()->default('NULL');
		$table->string('functie')->nullable()->default('NULL');
		$table->string('competentie')->nullable()->default('NULL');
		$table->integer('niveau',11)->nullable()->default('NULL');
		$table->string('indicator')->nullable()->default('NULL');
		$table->datetime('dpaanmaakdatum')->nullable()->default('NULL');
		$table->datetime('datumbehaald')->nullable()->default('NULL');
		$table->integer('aantalxaangetoond',11)->nullable()->default('NULL');
		$table->char('trial270',1)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('verworvencompetenties');
    }
}