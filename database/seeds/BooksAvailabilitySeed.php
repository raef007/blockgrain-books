<?php

use Illuminate\Database\Seeder;

class BooksAvailabilitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_availability')->insert(
			[
				'book_id' 		=> '1',
				'source_id'		=> '1',
				'stocks' 		=> '10',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			],
			[
				'book_id' 		=> '2',
				'source_id'		=> '1',
				'stocks' 		=> '0',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			],
			[
				'book_id' 		=> '2',
				'source_id'		=> '2',
				'stocks' 		=> '3',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			],
			[
				'book_id' 		=> '1',
				'source_id'		=> '2',
				'stocks' 		=> '12',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			]
		);
    }
}
