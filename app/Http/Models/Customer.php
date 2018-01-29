<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected 	$table 		= 'customers';			/* The database table used by the model.    */
	protected 	$primaryKey = 'customer_id';		/* The table's primary key                  */
	public		$timestamps = false;
	
	/**
     * Gets customer information according
	 * to bank and name
     *
     * @return array
     */
    public function getCustomerByNameAndBank($name, $bank)
    {
        $data   = self::where('name', $name)
				->where('bank_account', $bank)
				->where('status', 1)
				->limit(1)
				->get();
				
		return $data;
    }
	
	public function addNewCustomer($name, $bank)
    {
		$cust_db	= new Customer();
		
		$cust_db->name 			= $name;
		$cust_db->bank_account	= $bank;
		$cust_db->status		= 1;
		$cust_db->created_date	= date('Y-m-d H:i:s');
		$cust_db->updated_date	= date('Y-m-d H:i:s');
		
		$cust_db->save();
		
		return $cust_db->customer_id;
    }
}