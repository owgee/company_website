<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->integer('contact_id')->primary('contacts_pkey');
			$table->string('visitorname', 100)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('phonenumber', 100)->nullable();
			$table->string('message', 100)->nullable();
			$table->datetimetz('received_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}
