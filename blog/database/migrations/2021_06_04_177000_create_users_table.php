<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opleiding_id')->nullable()->constrained()->references('id')->on('opleiding')->onDelete('cascade');
            $table->foreignId('pop_id')->nullable()->constrained()->references('id')->on('pop')->onDelete('cascade');
            $table->string('cohort')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('studentnr')->unique();
            $table->string('email')->unique();
            $table->string('telefoonnummer')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('clearance', ['student', 'coach', 'admin']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
