<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected 	$table 		= 'transactions';		/* The database table used by the model.    */
	protected 	$primaryKey = 'transaction_id';		/* The table's primary key                  */
	public		$timestamps = false;
	
	/**
     * Gets customer information according
	 * to bank and name
     *
     * @return array
     */
    public function addTransaction($transaction)
    {
		$trans_db	= new Transaction();
		
		$trans_db->source_id 	= $transaction['source_id'];
		$trans_db->employee_id	= $transaction['employee_id'];
		$trans_db->customer_id	= $transaction['customer_id'];
		$trans_db->status		= 1;
		$trans_db->created_date	= date('Y-m-d H:i:s');
		$trans_db->updated_date	= date('Y-m-d H:i:s');
		
		$trans_db->save();
		
		return $trans_db->transaction_id;
    }
	
	 public function getEmployeeTransactions($employee_id)
    {
        $data   = self::select("*", "books.name as book_name", "customers.name as customer_name")
				->join('book_transactions', 'book_transactions.transaction_id', '=', 'transactions.transaction_id')
				->join('books', 'books.book_id', '=', 'book_transactions.book_id')
				->join('customers', 'customers.customer_id', '=', 'transactions.customer_id')
				->where('transactions.employee_id', $employee_id)
				->where('transactions.status', 1)
				->get();
				
		return $data;
    }

}