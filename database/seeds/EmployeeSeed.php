<?php

use Illuminate\Database\Seeder;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
			[
				'name' 			=> 'Employee 1',
				'source_id'		=> '1',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			],
			[
				'name' 			=> 'Employee 2',
				'source_id'		=> '2',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			]
		);
    }
}
