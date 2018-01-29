<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\BookSource;

class ShopController extends Controller
{

	/**
     * Initialization.
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
    public function getAllShops()
    {
        $shop_db	= new BookSource();
		$shop_data	= $shop_db->getActiveShops();
		
		return $shop_data;
    }
}