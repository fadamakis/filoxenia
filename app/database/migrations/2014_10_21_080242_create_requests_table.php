<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('requests', function($table)
	    {
	        $table->increments('id');
	        $table->string('fullname');
	        $table->string('sximatismos');
	        $table->string('monada');
	        $table->string('vathmos');
	        $table->string('swma');
	        $table->string('am');
	        $table->string('afm');
	        $table->string('amka');
	        $table->string('email');
	        $table->string('tel');
	        $table->integer('total_people');
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
	    Schema::drop('requests');
	}

}
