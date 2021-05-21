<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopcompetentiesTable extends Migration
{
    public function up()
    {
        Schema::create('popcompetenties', function (Blueprint $table) {

		$table->string('popcyclus')->nullable()->default('NULL');
		$table->string('opleiding')->nullable()->default('NULL');
		$table->tinyInteger('communiceren',1)->nullable()->default('NULL');
		$table->tinyInteger('samenwerken',1)->nullable()->default('NULL');
		$table->tinyInteger('organiseren',1)->nullable()->default('NULL');
		$table->tinyInteger('leadership',1)->nullable()->default('NULL');
		$table->tinyInteger('persoonlijke_effectiviteit',1)->nullable()->default('NULL');
		$table->tinyInteger('kritisch',1)->nullable()->default('NULL');
		$table->tinyInteger('probleemoplossend',1)->nullable()->default('NULL');
		$table->tinyInteger('onderzoeken',1)->nullable()->default('NULL');
		$table->tinyInteger('systemisch',1)->nullable()->default('NULL');
		$table->tinyInteger('abstraherend',1)->nullable()->default('NULL');
		$table->tinyInteger('schakelend',1)->nullable()->default('NULL');
		$table->tinyInteger('innovatief',1)->nullable()->default('NULL');
		$table->tinyInteger('vakmanschap',1)->nullable()->default('NULL');
		$table->tinyInteger('oordeelsvormend',1)->nullable()->default('NULL');
		$table->tinyInteger('reflectief',1)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('popcompetenties');
    }
}