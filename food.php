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
	
	<!-- Button trigger modal -->
	<div class="container">
		<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Add Food</button>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
    				To Add inline form, Angular controller
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
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
			  				<td>{{ getTotalFat() }}</td>
			  				<td>{{ getTotalCarb() }}</td>
			  				<td>{{ getTotalProt() }}</td>
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
    	var tCal = 0;
    	for(var i = 0; i < $scope.foods.length; i++){
     	   tCal += ($scope.foods[i].calperserv * $scope.foods[i].servings);
    	}
   		return tCal;
	}
	$scope.getTotalFat = function(){
    	var tFat = 0;
    	for(var i = 0; i < $scope.foods.length; i++){
     	   tFat += parseInt($scope.foods[i].fat);
    	}
   		return tFat;
	}
	$scope.getTotalCarb = function(){
    	var tCarb = 0;
    	for(var i = 0; i < $scope.foods.length; i++){
     	   tCarb += parseInt($scope.foods[i].carbs);
    	}
   		return tCarb;
	}
	$scope.getTotalProt = function(){
    	var tProt = 0;
    	for(var i = 0; i < $scope.foods.length; i++){
     	   tProt += parseInt($scope.foods[i].protein);
     	}
   		return tProt;
   	}	
}	
</script> 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>