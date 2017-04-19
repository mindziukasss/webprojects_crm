<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWpProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wp_projects', function(Blueprint $table)
		{
			$table->foreign('clients_id', 'fk_wb_projects_wp_clients1')->references('id')->on('wp_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wp_projects', function(Blueprint $table)
		{
			$table->dropForeign('fk_wb_projects_wp_clients1');
		});
	}

}
