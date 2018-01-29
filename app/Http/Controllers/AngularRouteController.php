<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AngularRouteController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the display of pages called via angular routing
    |
    */
	
	/**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
	
	/**
     * Displays the Home page route
     *
     * @return void
     */
    public function showHome()
    {
        return view('home');
    }
	
	/**
     * Displays the Home page route
     *
     * @return void
     */
    public function showEmployeeTransaction($emp)
    {
        return view('employee');
    }
	
}