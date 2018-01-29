<?php

use Illuminate\Database\Seeder;

class BooksSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
			[
				'name' 			=> 'Star Wars Ep 1 - Phantom Menace',
				'book_number'	=> '123456',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			],
			[
				'name' 			=> 'Star Wars Ep 2 - Clone Wars',
				'book_number'	=> '234567',
				'status' 		=> '1',
				'created_date' 	=> date('Y-m-d H:i:s'),
				'updated_date' 	=> date('Y-m-d H:i:s')
			]
		);
    }
}
