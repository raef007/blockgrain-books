angular.module("blockgrainBooks").controller('employeeCtrl', function($scope, $http, $routeParams) {
	
	$scope.employee			= {};

	$http.get("api/getEmpTrans/"+$routeParams.id)
		.then(
			function success(srv_resp){
				
				$scope.employee	= srv_resp.data[0];
				console.log($scope.employee.transactions);
			},
			function failed(srv_resp) {
				$scope.employee			= {};
			}
		);
	
});