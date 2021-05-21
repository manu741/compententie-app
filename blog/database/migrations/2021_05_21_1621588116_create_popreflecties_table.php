<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopreflectiesTable extends Migration
{
    public function up()
    {
        Schema::create('popreflecties', function (Blueprint $table) {

		$table->string('popcyclus')->nullable()->default('NULL');
		$table->string('soortreflectie')->nullable()->default('NULL');
		$table->string('competentie')->nullable()->default('NULL');
		$table->string('niveau')->nullable()->default('NULL');
		->nullable()->default('NULL');
		$table->string('reflectiemethode')->nullable()->default('NULL');
		$table->string('reflecties')->nullable()->default('NULL');
		$table->string('reflectiet')->nullable()->default('NULL');
		$table->string('reflectiea')->nullable()->default('NULL');
		$table->string('reflectieresultaat')->nullable()->default('NULL');
		$table->string('reflectiereflectie')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('popreflecties');
    }
}