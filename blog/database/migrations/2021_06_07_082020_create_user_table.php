<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {

		$table->integer('id',11);
		$table->string('voornaam')->nullable()->default('NULL');
		$table->string('achternaam')->nullable()->default('NULL');
		$table->string('studentnummer',50)->nullable()->default('NULL');
		$table->string('email')->nullable()->default('NULL');
		$table->string('mobiel')->nullable()->default('NULL');
		$table->string('wachtwoord')->nullable()->default('NULL');
		$table->string('clearance')->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}