<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected 	$table 		= 'employees';			/* The database table used by the model.    */
	protected 	$primaryKey = 'employee_id';		/* The table's primary key                  */
	public		$timestamps = false;
	
	public function getEmployee($employee_id)
    {
        $data   = self::where('employee_id', $employee_id)
			->get();
				
		return $data;
    }
	
    public function getShopEmployeeByName($source_id, $name)
    {
        $data   = self::where('source_id', $source_id)
				->where('name', $name)
				->where('status', 1)
				->limit(1)
				->get();
				
		return $data;
    }
}