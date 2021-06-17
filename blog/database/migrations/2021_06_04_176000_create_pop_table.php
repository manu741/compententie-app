<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pop', function (Blueprint $table) {
            $table->id();
            $table->foreignId('popcyclusdatum_id')->constrained()->references('id')->on('popcyclusdatum')->onDelete('cascade');
            $table->string('popnaam');
            $table->integer('niveau');
            $table->boolean('behaald');
            $table->integer('resultaat')->nullable();
            $table->date('afsluiting')->nullable();
            $table->enum('popfase', ['nulsituatie', 'afspraken', 'datapunten', 'midtermreview', 'evaluatie', 'zelfevaluatie']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pop');
    }
}
