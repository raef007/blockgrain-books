<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BookTransaction extends Model
{
	protected 	$table 		= 'book_transactions';		/* The database table used by the model.    */
	protected 	$primaryKey = 'book_trans_id';			/* The table's primary key                  */
	public		$timestamps = false;
	
	/**
     * Gets customer information according
	 * to bank and name
     *
     * @return array
     */
    public function addTransaction($transaction)
    {
		$trans_db	= new BookTransaction();
		
		$trans_db->transaction_id	= $transaction['trans_id'];
		$trans_db->	book_id			= $transaction['book_id'];
		$trans_db->status			= 1;
		$trans_db->created_date		= date('Y-m-d H:i:s');
		$trans_db->updated_date		= date('Y-m-d H:i:s');
		
		$trans_db->save();
		
		return $trans_db->book_trans_id;
    }

}