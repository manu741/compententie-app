<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opleiding_id')->constrained()->references('id')->on('opleiding')->onDelete('cascade');
            $table->string('cohort');
            $table->integer('studentnummer');
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('telefoonnummer');
            $table->string('email')->unique();
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
