<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopcyclusdatumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popcyclusdatum', function (Blueprint $table) {
            $table->id();
            $table->char('cyclus');
            $table->string('cyclusvolgorde');
            $table->boolean('eerstecyclus');
            $table->date('begin');
            $table->date('eind');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popcyclusdatum');
    }
}
