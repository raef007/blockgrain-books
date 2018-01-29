<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTransactionsTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_transactions', function(Blueprint $table)
		{
			$table->increments('book_trans_id');
			$table->integer('transaction_id');
			$table->integer('book_id');
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
        Schema::drop('book_transactions');
    }
}
