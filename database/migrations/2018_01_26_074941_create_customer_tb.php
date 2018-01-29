<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('customer_id');
			$table->string('name', 250);
			$table->string('bank_account', 250);
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
        Schema::drop('customers');
    }
}
