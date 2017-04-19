<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpProjectsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('projects_id', 36)->index('fk_wp_projects_persons_types_connections_wb_projects1_idx');
			$table->string('persons_id', 36)->index('fk_wp_projects_persons_types_connections_wp_persons1_idx');
			$table->string('employe_types_id', 36)->index('fk_wp_projects_persons_types_connections_wp_employe_types1_idx');
			$table->text('comment', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_projects_persons_types_connections');
	}

}
