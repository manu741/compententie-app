<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKopieVanPopTable extends Migration
{
    public function up()
    {
        Schema::create('kopie_van_pop', function (Blueprint $table) {

		$table->string('popcyclus');
		$table->string('popfase');
		$table->tinyInteger('locked',1)->nullable()->default('NULL');
		$table->string('popnaam')->nullable()->default('NULL');
		$table->integer('popniveau',11);
		$table->datetime('popdatumafsluiten')->nullable()->default('NULL');
		$table->tinyInteger('popbehaald',1)->nullable()->default('NULL');
		$table->decimal('popresultaat',1,0)->nullable()->default('NULL');
		$table->string('communiceren')->nullable()->default('NULL');
		->nullable()->default('NULL');
		$table->integer('communicerencijfer',11)->nullable()->default('NULL');
		$table->integer('communicerenniveau',11)->nullable()->default('NULL');
		$table->string('samenwerken')->nullable()->default('NULL');
		$table->string('organiseren')->nullable()->default('NULL');
		$table->string('leadership')->nullable()->default('NULL');
		$table->string('persoonlijke_effectiviteit')->nullable()->default('NULL');
		$table->string('kritisch')->nullable()->default('NULL');
		$table->string('probleemoplossend')->nullable()->default('NULL');
		$table->string('onderzoeken')->nullable()->default('NULL');
		$table->string('systemisch')->nullable()->default('NULL');
		$table->string('abstraherend')->nullable()->default('NULL');
		$table->string('schakelend')->nullable()->default('NULL');
		$table->string('innovatief')->nullable()->default('NULL');
		$table->string('vakmanschap')->nullable()->default('NULL');
		$table->string('oordeelsvormend')->nullable()->default('NULL');
		$table->string('reflectief')->nullable()->default('NULL');
		$table->primary(['popcyclus','popfase']);

        });
    }

    public function down()
    {
        Schema::dropIfExists('kopie_van_pop');
    }
}