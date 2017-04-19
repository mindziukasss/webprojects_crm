<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpPersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_persons', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('delete_at')->nullable();
			$table->string('name');
			$table->string('email');
			$table->string('phone', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_persons');
	}

}
