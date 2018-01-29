<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookSourcesSeed::class);
        $this->call(EmployeeSeed::class);
        $this->call(BooksSeed::class);
        $this->call(BooksAvailabilitySeed::class);
    }
}
