<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapuntenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapunten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('onderwijseenheid_id')->nullable()->constrained()->references('id')->on('onderwijseenheid')->onDelete('cascade');
            $table->foreignId('opdrachtgever_id')->nullable()->constrained()->references('id')->on('opdrachtgever')->onDelete('cascade');
            $table->foreignId('beroepsproduct_id')->nullable()->constrained()->references('id')->on('beroepsproduct')->onDelete('cascade');
            $table->foreignId('indicator_id')->constrained()->references('id')->on('indicatoren')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('pop_id')->nullable()->constrained()->references('id')->on('pop')->onDelete('cascade');
            $table->char('naam');
            $table->boolean('bevroren');
            $table->text('onderbouwing')->nullable();
            $table->text('feedback')->nullable();
            $table->text('feedup')->nullable();
            $table->text('feedforward')->nullable();
            $table->binary('bijlage')->nullable();
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
        Schema::dropIfExists('datapunten');
    }
}
