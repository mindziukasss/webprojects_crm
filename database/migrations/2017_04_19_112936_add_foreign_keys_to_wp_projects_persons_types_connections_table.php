<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWpProjectsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wp_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->foreign('projects_id', 'fk_wp_projects_persons_types_connections_wb_projects1')->references('id')->on('wp_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('employe_types_id', 'fk_wp_projects_persons_types_connections_wp_employe_types1')->references('id')->on('wp_projects_persons_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('persons_id', 'fk_wp_projects_persons_types_connections_wp_persons1')->references('id')->on('wp_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wp_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_wp_projects_persons_types_connections_wb_projects1');
			$table->dropForeign('fk_wp_projects_persons_types_connections_wp_employe_types1');
			$table->dropForeign('fk_wp_projects_persons_types_connections_wp_persons1');
		});
	}

}
