<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWpLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('wp_logins', function(Blueprint $table)
		{
			$table->foreign('logins_name_id', 'fk_wp_logins_wp_logins_name1')->references('id')->on('wp_logins_name')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('wp_logins', function(Blueprint $table)
		{
			$table->dropForeign('fk_wp_logins_wp_logins_name1');
		});
	}

}
