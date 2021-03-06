<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archives', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('arcid');
			$table->integer('showid');
			$table->string('title');
			$table->text('description');
			$table->text('archivelink');
			$table->integer('listencount');
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('archives');
	}

}
