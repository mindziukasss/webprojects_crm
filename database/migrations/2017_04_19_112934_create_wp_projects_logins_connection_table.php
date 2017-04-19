<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpProjectsLoginsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_projects_logins_connection', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('projects_id', 36)->index('fk_wp_projects_logins_connection_wb_projects1_idx');
			$table->string('logins_id', 36)->index('fk_wp_projects_logins_connection_wp_logins1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_projects_logins_connection');
	}

}
