<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopcyclusdatumsTable extends Migration
{
    public function up()
    {
        Schema::create('popcyclusdatums', function (Blueprint $table) {

		$table->string('popcyclus')->nullable()->default('NULL');
		$table->integer('cyclusvolgorde',11);
		$table->tinyInteger('eerstecyclus',1)->nullable()->default('NULL');
		$table->datetime('datumbegin')->nullable()->default('NULL');
		$table->datetime('datumeind')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('popcyclusdatums');
    }
}