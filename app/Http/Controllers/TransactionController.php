<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Employee;
use App\Http\Models\Customer;
use App\Http\Models\Transaction;
use App\Http\Models\BookTransaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
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
     * Create a new authentication controller instance.
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
	public function validateTransaction(Request $request)
    {
        $messages   = array();                      /* Validation Messages according to rules   */
        $rules      = array();                      /* Validation Rules                         */
        $errors     = array();
        
		$employee_db	= new Employee();
		$customer_db	= new Customer();
		$transaction_db	= new Transaction();
		$book_trans_db	= new BookTransaction();
		
        $rules      = array(
            'source_id' 	=> 'required',
            'book_id'     	=> 'required',
            'book_name'     => 'required',
            'employee_name' => 'required',
            'customer_name'	=> 'required',
			'bank_number'	=> 'required'
        );
        
		/*  Run the Laravel Validation  */
		$validator = $this->validate($request, $rules);
		
		if ($validator) {
			$errors   = $validator->messages()->all();
		}
		else {
			$source		= $request->get('source_id');
			$employee	= $request->get('employee_name');
			$customer	= $request->get('customer_name');
			$bank		= $request->get('bank_number');
			
			$cust_exist	= $customer_db->getCustomerByNameAndBank($customer, $bank);
			$emp_exist	= $employee_db->getShopEmployeeByName($source, $employee);
			
			if (0 >= count($cust_exist)) {
				$cust_id	= $customer_db->addNewCustomer($customer, $bank);
			}
			else {
				$cust_id	= $cust_exist[0]->customer_id;
			}
			
			if (0 >= count($emp_exist)) {
				$errors[]	= 'Employee does not exist';
			}
			else {
				$trans_data['source_id']	= $source;
				$trans_data['employee_id']	= $emp_exist[0]->employee_id;
				$trans_data['customer_id']	= $cust_id;
				$trans_data['book_id']		= $request->get('book_id');
				$trans_data['trans_id']		= $transaction_db->addTransaction($trans_data);
				
				$book_trans_db->addTransaction($trans_data);
			}
			
		}
		
        return $errors;
    }
	
	public function getEmployeeTransactions($employee_id)
    {		
		$transaction_db	= new Transaction();
		$employee_db	= new Employee();
		
		$employee	= $employee_db->getEmployee($employee_id);
		
		if (0 < count($employee)) {
			$employee[0]->transactions	= $transaction_db->getEmployeeTransactions($employee_id);
		}
		
        return $employee;
    }
}