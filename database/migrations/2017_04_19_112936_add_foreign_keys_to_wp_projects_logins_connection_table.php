<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWpProjectsLoginsConnectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wp_projects_logins_connection', function(Blueprint $table)
		{
			$table->foreign('projects_id', 'fk_wp_projects_logins_connection_wb_projects1')->references('id')->on('wp_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('logins_id', 'fk_wp_projects_logins_connection_wp_logins1')->references('id')->on('wp_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wp_projects_logins_connection', function(Blueprint $table)
		{
			$table->dropForeign('fk_wp_projects_logins_connection_wb_projects1');
			$table->dropForeign('fk_wp_projects_logins_connection_wp_logins1');
		});
	}

}
