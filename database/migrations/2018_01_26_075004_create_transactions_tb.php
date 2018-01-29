<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table)
		{
			$table->increments('transaction_id');
			$table->integer('source_id');
			$table->integer('employee_id');
			$table->integer('customer_id');
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
        Schema::drop('transactions');
    }
}
