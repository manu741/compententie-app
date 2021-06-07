<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpleidingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opleiding', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instituut_id')->constrained()->references('id')->on('instituut')->onDelete('cascade');
            $table->string('naam');
            $table->string('afkorting');
            $table->integer('jaren');
            $table->enum('type', ['bachelor', 'associate degree']);
            $table->enum('cyclus', ['periode', 'semester', 'jaar']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opleidingen');
    }
}
