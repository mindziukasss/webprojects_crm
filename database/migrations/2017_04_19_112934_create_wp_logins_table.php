<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWpLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wp_logins', function(Blueprint $table)
		{
			$table->string('id', 36)->unique('id');
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('deleted_at')->nullable();
			$table->string('logins_name_id', 36)->index('fk_wp_logins_wp_logins_name1_idx');
			$table->string('user');
			$table->string('password');
			$table->string('login_url');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wp_logins');
	}

}
