<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWpProjectsTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wp_projects_types', function(Blueprint $table)
		{
			$table->foreign('project_id', 'fk_wb_project_types_wb_projects1')->references('id')->on('wp_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wp_projects_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_wb_project_types_wb_projects1');
		});
	}

}
