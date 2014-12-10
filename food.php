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
		<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addFoodModal">Add Food</button>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="addFoodModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="foodModalTitle">Add a Food!</h4>
				</div>
				<div class="modal-body">
    				<form role="form" id="addFood" method="post" action="model/database/addFood.php">
    					<div class"form-group">
    						<label for="food">Food:</label>
    						<input type="text" class="form-control" id="foodInput" name="foodInput" placeholder="What did you eat?">
    					</div>
    					<div class"form-group">
    						<label for="servings">Servings:</label>
    						<input type="text" class="form-control" id="servInput" name="servInput" placeholder="Servings?">
    					</div>
    					<div class"form-group">
    						<label for="calperserv">Calories:</label>
    						<input type="text" class="form-control" id="calperservInput" name="calperservInput" placeholder="Calories per serving?">
    					</div>
    					<div class"form-group">
    						<label for="fat">Fat:</label>
    						<input type="text" class="form-control" id="fatInput" name="fatInput" placeholder="Fat(g)?">
    					</div> 
    					<div class"form-group">
    						<label for="carbs">Carbs:</label>
    						<input type="text" class="form-control" id="carbInput" name="carbInput" name="carbInput" placeholder="Carbs(g)?">
    					</div> 
    					<div class"form-group">
    						<label for="protein">Protein:</label>
    						<input type="text" class="form-control" id="protInput" name="protInput" placeholder="Protein(g)?">
    					</div> 
    					<div class"form-group">
    						<label for="date">Time of Meal:</label>
    						<input type="datetime" class="form-control" id="dateInput" name="dateInput" placeholder="YYYY-MM-DD HH:MM:SS">
    					</div>
    					<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" onclick="submitFood()" data-dismiss="modal">Add Food</button>
						</div>     					    					    					  					    					    					
    				</form>
				</div>
			</div>
		</div>
	</div>
<script>
var submitFood = function(){
	$.post( "model/database/addFood.php", $( "#addFood" ).serialize(), function( data ) {
		alert( "Data returned: " + data );
		});
};
</script>	
	
	<div class="container">
		<div class="table-responsive">
			<div ng-app="foodTableApp" ng-controller="foodTableController">
				<table class="table table-hover">
					<thead>
						<tr>
			          		<th>Food</th>
			          		<th>Servings</th>
			         		<th>Calories</th>
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
			    			<td>{{ (x.fat)*(x.servings) }}</td>
			    			<td>{{ (x.carbs)*(x.servings) }}</td>
			    			<td>{{ (x.protein)*(x.servings) }}</td>
			    			<td>{{ (x.mealdate) }}</td>
			  			</tr>
			  			<tr>
			  				<td><strong>TOTALS:</strong></td>
			  				<td>-</td>
			  				<td>-</td>
			  				<td>{{tCal()}}</td>
			  				<td>{{tFat()}}</td>
			  				<td>{{tCarb()}}</td>
			  				<td>{{tProt()}}</td>
			  				<td><button class="btn btn-primary" ng-click="loadData()">Refresh</button></td>
			  			</tr>
			  		</tbody>
				</table>
			 </div>
		</div>
	</div>
	
<script>
var foodTable = angular.module('foodTableApp',[])
.controller('foodTableController', function($scope, $http) {		
		$scope.loadData = function(){
			$http.get('model/database/foodDB_JSON.php').success(function(data){
				$scope.foods=data;
				$scope.tCal = function(){ return sum(data, 'calperserv'); };
				$scope.tFat = function(){ return sum(data, 'fat'); };
				$scope.tCarb = function(){ return sum(data, 'carbs'); };
				$scope.tProt = function(){ return sum(data, 'protein'); };		
			});
		};
		
		$scope.loadData();
		
});

function sum(data, field){
	var total = 0;
	$.each(data, function(i, el){
		total += +el[field]*el['servings'];
	});
	return total;
}				
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
</body>
</html>