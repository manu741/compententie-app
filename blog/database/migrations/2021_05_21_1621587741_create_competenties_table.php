<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetentiesTable extends Migration
{
    public function up()
    {
        Schema::create('competenties', function (Blueprint $table) {

		$table->string('curriculum');
		$table->string('competentie');
		$table->string('comptype')->nullable()->default('NULL');
		$table->tinyInteger('eindkwalificatie',1)->nullable()->default('NULL');
		$table->char('trial264',1)->nullable()->default('NULL');
		$table->primary(['curriculum','competentie']);

        });
    }

    public function down()
    {
        Schema::dropIfExists('competenties');
    }
}