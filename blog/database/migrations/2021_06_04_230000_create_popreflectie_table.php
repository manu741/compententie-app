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
            $table->foreignId('pop_id')->constrained()->references('id')->on('pop')->onDelete('cascade');
            $table->enum('soort', ['aantonen', 'competentie', 'zelfreflectie']);
            $table->enum('methode', ['starr', 'korthagen']);
            $table->char('naam')->nullable();
            $table->longText('situatie');
            $table->longText('taak');
            $table->longText('actie');
            $table->longText('resultaat');
            $table->longText('reflectie');
            $table->timestamps();
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
