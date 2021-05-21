<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessorenTable extends Migration
{
    public function up()
    {
        Schema::create('assessoren', function (Blueprint $table) {

		$table->string('assessornaam');
		$table->string('assessor-email')->nullable()->default('NULL');
		$table->string('assessor-contactgegevens')->nullable()->default('NULL');
		$table->string('assessor-relatie')->nullable()->default('NULL');
		$table->primary('assessornaam');

        });
    }

    public function down()
    {
        Schema::dropIfExists('assessoren');
    }
}