<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetentieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competentie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nulsituatie_id')->constrained()->references('id')->on('nulsituatie')->onDelete('cascade');
            $table->string('competentie');
            $table->enum('type', ['generiek', 'vakinhoudelijk']);
            $table->boolean('eindkwalificatie');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competentie');
    }
}
