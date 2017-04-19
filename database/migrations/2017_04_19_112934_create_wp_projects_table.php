<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_projects', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('delete_at')->nullable();
			$table->string('clients_id', 36)->index('fk_wb_projects_wp_clients1_idx');
			$table->string('name');
			$table->string('type');
			$table->text('description', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_projects');
	}

}
