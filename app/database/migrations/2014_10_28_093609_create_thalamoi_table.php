<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThalamoiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thalamoi', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('name');
			$table->integer('ksenwnas_id');
			$table->integer('total_places');
			$table->integer('available_places');

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
		Schema::drop('thalamoi');
	}

}
