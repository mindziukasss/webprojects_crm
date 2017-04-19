<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWpClientsPersonsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wp_clients_persons_connections', function(Blueprint $table)
		{
			$table->foreign('clients_id', 'fk_wp_clients_persons_connections_wp_clients')->references('id')->on('wp_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('clients_persons_type_id', 'fk_wp_clients_persons_connections_wp_clients_persons_types1')->references('id')->on('wp_clients_persons_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('person_id', 'fk_wp_clients_persons_connections_wp_persons1')->references('id')->on('wp_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wp_clients_persons_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_wp_clients_persons_connections_wp_clients');
			$table->dropForeign('fk_wp_clients_persons_connections_wp_clients_persons_types1');
			$table->dropForeign('fk_wp_clients_persons_connections_wp_persons1');
		});
	}

}
