<html>
	<head>
		<title>Book Management</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
		
		<link href="{{ URL::asset('assets/styles/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
		<link href="{{ URL::asset('assets/styles/style.css') }}" rel='stylesheet' type='text/css' />
		
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
		
		<script src="{{ URL::asset('assets/scripts/angular/blockgrainBooks.js') }}"></script>

	</head>
	
	<body>
		<div class = 'main-container' ng-app = 'blockgrainBooks'>
			<div id = 'content-container' ng-view>
				
			</div>
		</div>
		
		<script src="{{ URL::asset('assets/scripts/bootstrap.min.js') }}"></script>
		
		<script src="{{ URL::asset('assets/scripts/angular/homeCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/angular/employeeCtrl.js') }}"></script>
		
	</body>

</html>