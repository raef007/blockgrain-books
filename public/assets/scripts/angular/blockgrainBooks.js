angular.module("blockgrainBooks", []);

angular.module("blockgrainBooks", ['ngRoute']).config(function($routeProvider) {
	$routeProvider
		.when('/employee/:id', {
			templateUrl: "employee/:id",
			controller: 'employeeCtrl'
		})
		.otherwise({
			templateUrl : "home",
			controller: 'homeCtrl'
	    });;
});

angular.module("blockgrainBooks").filter('startFrom', function() {
    
    return function(input, start) {
        if (input) {
            start = +start; //parse to int
            return input.slice(start);
        }
    }
});