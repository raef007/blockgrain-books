<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksAvailTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_availability', function(Blueprint $table)
		{
			$table->increments('book_source_id');
			$table->integer('book_id');
			$table->integer('source_id');
			$table->integer('stocks');
			$table->tinyInteger('status');
			$table->datetime('created_date');
			$table->datetime('updated_date');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book_availability');
    }
}
