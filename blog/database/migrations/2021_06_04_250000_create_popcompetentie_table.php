<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopcompetentieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popcompetentie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('popcyclusdatum_id')->constrained()->references('id')->on('popcyclusdatum')->onDelete('cascade');
            $table->foreignId('opleiding_id')->constrained()->references('id')->on('opleiding')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('competentie_id')->constrained()->references('id')->on('competentie')->onDelete('cascade');
            $table->boolean('communiceren');
            $table->boolean('samenwerken');
            $table->boolean('organiseren');
            $table->boolean('leadership');
            $table->boolean('persoonlijke_effectiviteit');
            $table->boolean('kritisch');
            $table->boolean('probleemoplossend');
            $table->boolean('onderzoekend');
            $table->boolean('systemisch');
            $table->boolean('abstraheren');
            $table->boolean('schakelend');
            $table->boolean('innovatief');
            $table->boolean('vakmanschap');
            $table->boolean('oordeelsvormend');
            $table->boolean('reflectief');
            $table->enum('functie', ['gerealiseerd', 'doel']);
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
        Schema::dropIfExists('popcompetentie');
    }
}
