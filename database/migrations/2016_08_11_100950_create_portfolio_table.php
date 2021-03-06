<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortfolioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio', function(Blueprint $table)
		{
			$table->integer('portfolio_id', true);
			$table->string('portfolioname', 100);
			$table->string('imageurl', 100);
			$table->text('description');
			$table->integer('client_id');
			$table->datetimetz('uploaded_at')->nullable();
			$table->timestamps();
			$table->integer('user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('portfolio');
	}

}
