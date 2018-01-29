angular.module("blockgrainBooks").controller('homeCtrl', function($scope, $http) {
	
	$scope.books		= {};
	$scope.checkout		= {};
	$scope.trans_form	= 0;
	
    $http.get("api/getShops")
		.then(
			function success(srv_resp){
				$scope.shops	= srv_resp.data;
				
			},
			function failed(srv_resp) {
				$scope.shops	= [{}];
				$scope.books	= [];
			}
		);
	
	$scope.showBooks = function(shop) {
		$http.get('api/getShopBooks/'+shop.source_id)
			.then(
				function success(srv_resp) {
					$scope.books	= srv_resp.data;
				}, function failed(srv_resp) {
					$scope.books	= {};
				}
			);
	}
	
	$scope.checkoutBook = function(book) {
		
		$scope.checkout.source_id		= book.source_id;
		$scope.checkout.book_id			= book.book_id;
		$scope.checkout.source_name		= book.shop_name;
		$scope.checkout.book_name		= book.book_name;
		$scope.checkout.employee_name	= '';
		$scope.checkout.customer_name	= '';
		$scope.checkout.bank_number		= '';
		
		$scope.trans_form	= 1;
	}
	
	$scope.procTrans = function() {
		$http.post('api/verifyTransaction', $scope.checkout)
			.then(
				function success(srv_resp) {
					$scope.books	= srv_resp.data;
				}, function failed(srv_resp) {
					$scope.books	= {};
				}
			);
	}
	
});