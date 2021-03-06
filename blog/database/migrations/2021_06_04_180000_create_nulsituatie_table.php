<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNulsituatieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nulsituatie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('competentie_id')->constrained()->references('id')->on('competentie')->onDelete('cascade');
            $table->enum('niveau', ['1', '2', '3', '4', '5']);
            $table->integer('cijfer');
            $table->text('motivatie');
            $table->text('compliment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nulsituatie');
    }
}
