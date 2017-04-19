<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpProjectsTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_projects_types', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('update_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('delete_at')->nullable();
			$table->string('project_id', 36)->index('fk_wb_project_types_wb_projects1_idx');
			$table->string('name');
			$table->string('types');
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
		Schema::drop('wp_projects_types');
	}

}
