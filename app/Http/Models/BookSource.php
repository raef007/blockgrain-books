<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BookSource extends Model
{
	protected 	$table 		= 'book_sources';	/* The database table used by the model.    */
	protected 	$primaryKey = 'source_id';		/* The table's primary key                  */
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
    public function getActiveShops()
    {
        $data   = self::where('status', 1)
				->orderBy('name', 'desc')
				->get();
				
		return $data;
    }
}