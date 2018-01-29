<div id = 'home-cntr' class = 'container'>
	<div> <span> Shops </span> </div>
	
	<div class = 'col-md-12'>
		<div class = 'col-md-3' ng-repeat = 'shop in shops track by $index'>
			<div> <b>Shop name:</b> {{ shop.name }} </div>
			<div ng-if = "1 == shop.type"> Book store</div>
			<div ng-if = "2 == shop.type"> Library</div>
			<div ng-if = "3 == shop.type"> Kiosk</div>
			<div> {{ shop.unique_define }} </div>
			<div> <a href = "#" ng-click = 'showBooks(shop)'> Show Books <a/> </div>
		</div>
	</div>
	
	<div class = 'col-md-12' ng-if = '0 < books.length'>
		<table>
			<thead>
				<tr>
					<th> Title </th>
					<th> Book Number </th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat = 'book in books track by $index'>
					<td> {{ book.book_name }} </td>
					<td> {{ book.book_number }} </td>
					<td> <a href = '#' ng-click = 'checkoutBook(book)'> PURCHASE </td>
				</tr>
			</tbody>
		<table>
	</div>
	
	<div class = 'col-md-12' ng-if = '1 == trans_form'>
		<form>
			<div>
				<label> Shop: </label>
				<input type = 'text' ng-model = 'checkout.source_name'>
			</div>
			
			<div>
				<label> Book: </label>
				<input type = 'text' ng-model = 'checkout.book_name'>
			</div>
			
			<div>
				<label> Employee: </label>
				<input type = 'text' ng-model = 'checkout.employee_name'>
			</div>
			
			<div>
				<label> Customer: </label>
				<input type = 'text' ng-model = 'checkout.customer_name'>
			</div>
			
			<div>
				<label> Bank: </label>
				<input type = 'text' ng-model = 'checkout.bank_number'>
			</div>
			
			<div>
				<button type = 'submit' ng-click = 'procTrans()'> BUY </button>
			</div>
			
		</form>
	</div>
	
</div>