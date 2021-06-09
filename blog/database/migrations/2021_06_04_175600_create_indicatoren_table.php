<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicatoren', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opleiding_id')->constrained()->references('id')->on('opleiding')->onDelete('cascade');
            $table->foreignId('competentie_id')->constrained()->references('id')->on('competentie')->onDelete('cascade');
            $table->string('niveau');
            $table->text('indicator');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicatoren');
    }
}
