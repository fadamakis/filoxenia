<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
	    Schema::create('rooms', function($table)
	    {
	        $table->increments('id');
	        $table->string('name');
	        $table->string('address');
	        $table->float('cost');
	        $table->integer('total_places');
	        $table->longText('description');
	        $table->timestamps();
	    });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
	    Schema::drop('rooms');
	}

}
