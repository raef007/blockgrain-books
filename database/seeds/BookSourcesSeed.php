<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSourcesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_sources')->insert(
			[
				'name' 			=> 'Book Store 1',
				'type' 			=> '1',
				'unique_define' => 'Book Store 1 Owner',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			],
			[
				'name' 			=> 'Library 1',
				'type' 			=> '2',
				'unique_define' => 'Library 1 Location',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			]
		);
    }
}
