<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BookAvailability extends Model
{
	protected 	$table 		= 'book_availability';	/* The database table used by the model.    */
	protected 	$primaryKey = 'book_source_id';		/* The table's primary key                  */
	public		$timestamps = false;
	
	/*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
	
	/**
     * Gets all the shops
     *
     * @return array
     */
    public function getActiveShopBooks($source_id)
    {
        $data   = self::select("*", "book_sources.name as shop_name", "books.name as book_name")
				->join('books', 'books.book_id', '=', 'book_availability.book_id')
				->join('book_sources', 'book_sources.source_id', '=', 'book_availability.source_id')
				->where('book_availability.status', 1)
				->where('book_availability.stocks', '>', 1)
				->where('book_availability.source_id', $source_id)
				->where('book_availability.status', 1)
				->orderBy('books.name', 'desc')
				->get();
				
		return $data;
    }
}