<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNulsituatieTable extends Migration
{
    public function up()
    {
        Schema::create('nulsituatie', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('popcyclus')->nullable()->default('NULL');
		$table->string('curriculum')->nullable()->default('NULL');
		$table->string('competentie')->nullable()->default('NULL');
		$table->integer('niveau',11)->nullable()->default('NULL');
		$table->integer('cijfer',11)->nullable()->default('NULL');
		->nullable()->default('NULL');
		$table->string('compliment')->nullable()->default('NULL');
		$table->char('trial267',1)->nullable()->default('NULL');
		$table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('nulsituatie');
    }
}