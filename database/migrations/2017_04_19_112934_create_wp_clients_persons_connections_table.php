<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpClientsPersonsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_clients_persons_connections', function(Blueprint $table)
		{
			$table->string('id', 36)->unique('id');
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('clients_id', 36)->index('fk_wp_clients_persons_connections_wp_clients_idx');
			$table->string('person_id', 36)->index('fk_wp_clients_persons_connections_wp_persons1_idx');
			$table->string('clients_persons_type_id', 36)->index('fk_wp_clients_persons_connections_wp_clients_persons_types1_idx');
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
		Schema::drop('wp_clients_persons_connections');
	}

}
