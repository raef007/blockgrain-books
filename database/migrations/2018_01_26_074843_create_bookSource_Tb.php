<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSourceTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_sources', function(Blueprint $table)
		{
			$table->increments('source_id');
			$table->string('name', 250);
			$table->tinyInteger('type');
			$table->string('unique_define', 250);
			$table->tinyInteger('status')->default(1);
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
        Schema::drop('book_sources');
    }
}
