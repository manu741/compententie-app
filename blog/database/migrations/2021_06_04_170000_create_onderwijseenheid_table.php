<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnderwijseenheidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onderwijseenheid', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opleiding_id')->references('id')->on('opleiding')->constrained()->onDelete('cascade');
            $table->string('eenheid');
            $table->enum('vorm', ['deeltijd', 'voltijd']);
            $table->enum('fase', ['propedeuse', 'hoofdfase']);
            $table->enum('type', ['specialisatie', 'cursorisch', 'afstuderen', 'stage']);
            $table->integer('studiepunten');
            $table->integer('studiejaar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onderwijseenheid');
    }
}
