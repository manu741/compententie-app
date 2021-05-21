<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpdrachtgeverTable extends Migration
{
    public function up()
    {
        Schema::create('opdrachtgever', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('opdrachtgever')->nullable()->default('NULL');
		$table->string('locatie')->nullable()->default('NULL');
		$table->string('woonplaats')->nullable()->default('NULL');
		$table->string('contactpersoon')->nullable()->default('NULL');
		$table->string('telefoon')->nullable()->default('NULL');
		$table->char('trial267',1)->nullable()->default('NULL');
		$table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('opdrachtgever');
    }
}