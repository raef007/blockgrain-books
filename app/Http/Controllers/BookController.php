<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\BookAvailability;

class BookController extends Controller
{
	/**
     * Initialization
     *
     * @return void
     */
    public function __construct()
    {
        
    }
	
	/**
     * Gets all the shops
     *
     * @return void
     */
    public function getShopBooks($source_id)
    {
        $book_db	= new BookAvailability();
		$book_data	= $book_db->getActiveShopBooks($source_id);
		
		return $book_data;
    }
}