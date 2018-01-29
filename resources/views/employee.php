<div id = 'employee-cntr' class = 'container'>
	<div> <span> Employee: {{ employee.name }} </span> </div>
	
	<div>
		<table>
			<thead>
				<tr>
					<th> Transaction Number </th>
					<th> Date </th>
					<th> Title </th>
					<th> Book Number </th>
					<th> Customer </th>
				</tr>
			</thead>
			
			<tbody>
				<tr ng-repeat = 'transaction in employee.transactions track by $index'>
					<td> {{ transaction.transaction_id }} </td>
					<td> {{ transaction.created_date }} </td>
					<td> {{ transaction.book_name }} </td>
					<td> {{ transaction.book_number }} </td>
					<td> {{ transaction.customer_name }} </td>
				</tr>
			</tbody>
			
		</table>
	</div>
	
	
	
</div>