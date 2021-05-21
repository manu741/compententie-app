<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopindicatorenTable extends Migration
{
    public function up()
    {
        Schema::create('popindicatoren', function (Blueprint $table) {

		$table->string('popcyclus')->nullable()->default('NULL');
		$table->string('popfase')->nullable()->default('NULL');
		$table->string('competentie')->nullable()->default('NULL');
		$table->string('niveau')->nullable()->default('NULL');
		->nullable()->default('NULL');
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
        Schema::dropIfExists('popindicatoren');
    }
}