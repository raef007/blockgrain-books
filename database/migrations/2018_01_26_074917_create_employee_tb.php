<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('employee_id');
			$table->string('source_id', 250);
			$table->string('name', 250);
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
        Schema::drop('employees');
    }
}
