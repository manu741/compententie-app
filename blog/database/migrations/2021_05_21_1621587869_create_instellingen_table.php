<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstellingenTable extends Migration
{
    public function up()
    {
        Schema::create('instellingen', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('currentrelease')->nullable()->default('NULL');
		$table->string('latestversionupdate')->nullable()->default('NULL');
		$table->string('firstsemester')->nullable()->default('NULL');
		$table->string('opleidingtype')->nullable()->default('NULL');
		$table->string('opleidingkort')->nullable()->default('NULL');
		$table->string('opleidingnaam')->nullable()->default('NULL');
		$table->string('eenheid')->nullable()->default('NULL');
		$table->integer('instituutid',11)->nullable()->default('NULL');
		$table->string('actief');
		$table->integer('niveau_jaar_1',11)->nullable()->default('NULL');
		$table->integer('niveau_jaar_2',11)->nullable()->default('NULL');
		$table->integer('niveau_jaar_3',11)->nullable()->default('NULL');
		$table->integer('niveau_jaar_4',11)->nullable()->default('NULL');
		$table->string('studentnummer',50)->nullable()->default('NULL');
		$table->string('voornaam')->nullable()->default('NULL');
		$table->string('achternaam')->nullable()->default('NULL');
		$table->string('niveau')->nullable()->default('NULL');
		$table->string('cohort')->nullable()->default('NULL');
		$table->string('leerteam')->nullable()->default('NULL');
		$table->string('mobiel')->nullable()->default('NULL');
		$table->string('email')->nullable()->default('NULL');
		$table->string('leerteambegeleider')->nullable()->default('NULL');
		$table->string('huidigepopcyclus')->nullable()->default('NULL');
		$table->primary('id');

        });
    }

    public function down()
    {
        Schema::dropIfExists('instellingen');
    }
}