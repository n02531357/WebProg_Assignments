<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">PhatTrack</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
	     			<li><a href="/~n02531357/WebProgramming/">Home	<span class="glyphicon glyphicon-home"></span></a></li>
	     			<li><a href="/~n02531357/WebProgramming/progress.php">Progress	<span class="glyphicon glyphicon-road"></span></a></li>
	     			<li class="active"><a href="/~n02531357/WebProgramming/food.php">Food	<span class="glyphicon glyphicon-cutlery"></span></a></li>
	     			<li><a href="/~n02531357/WebProgramming/excercise.php">Excercise	<span class="glyphicon glyphicon-fire"></span></a></li>
			    </ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="page-header">
			<h1>Meal Summary</h1>
		</div>
	</div>
			
	<div class="container">
		<div class="table-responsive">
			<div ng-app="" ng-controller="foodTableController">
				<table class="table table-hover">
					<thead>
						<tr>
			          		<th>Food</th>
			          		<th>Servings</th>
			         		<th>Calories per Serving</th>
			         		<th>Calories Total</th>
			         		<th>Fat(g)</th>
			         		<th>Carbs(g)</th>
			         		<th>Protein(g)</th>
			         		<th>Date</th>
					    </tr>
					</thead>
					<tbody>
			  			<tr ng-repeat="x in foods">
			    			<td>{{ x.food }}</td>
			    			<td>{{ x.servings }}</td>
			    			<td>{{ x.calperserv }}</td>
			    			<td>{{ (x.calperserv)*(x.servings) }}</td>
			    			<td>{{ x.fat }}</td>
			    			<td>{{ x.carbs }}</td>
			    			<td>{{ x.protein }}</td>
			    			<td>{{ x.mealdate }}</td>
			  			</tr>
			  			<tr>
			  				<td><strong>TOTALS:</strong></td>
			  				<td>-</td>
			  				<td>-</td>
			  				<td>{{ getTotalCal() }}</td>
			  				<td>-</td>
			  				<td>-</td>
			  				<td>-</td>
			  				<td>-</td>
			  			</tr>
			  		</tbody>
				</table>
			 </div>
		</div>
	</div>
	
		
<script>
function foodTableController($scope,$http) {
	var dir = "content/database/foodDB_JSON.php";
	$http.get(dir).success(function(response) {$scope.foods = response;});
	$scope.getTotalCal = function(){
    	var total = 0;
    	for(var i = 0; i < $scope.foods.length; i++){
     	   total += ($scope.foods[i].calperserv * $scope.foods[i].servings);
    	}
   		return total;
	}
}	
</script> 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>