<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopreflectieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popreflectie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('popcyclusdatum_id')->constrained()->references('id')->on('popcyclusdatum')->onDelete('cascade');
            $table->enum('soort', ['aantonen', 'competentie', 'zelfreflectie']);
            $table->enum('methode', ['starr', 'korthagen']);
            $table->longText('situatie');
            $table->longText('taak');
            $table->longText('actie');
            $table->longText('resultaat');
            $table->longText('reflectie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popreflectie');
    }
}
