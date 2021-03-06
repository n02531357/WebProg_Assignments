<!DOCTYPE html>
<html lang="en">
<head>
	<title>Meal Summary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="angular-xeditable/js/xeditable.js"></script>
<script language="javascript" type="text/javascript" src="content/js/datetimepicker.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<link href="angular-xeditable/css/xeditable.css" rel="stylesheet">
</head>

<body ng-app="foodTableApp" ng-controller="foodTableController">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">PhatTrack</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
	     			<li><a href="/~n02531357/WebProgramming/">Home	<span class="glyphicon glyphicon-home"></span></a></li>
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
		<div class='col-sm-8'>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: {{(tCal()/dailyGoal)*100 + '%'}}">
							<span style="text-align: center, color: white">{{(tCal()/dailyGoal)*100 | number:0}}%</span>						  
						</div>
					</div>
					<div class="col-sm-5">
						<div id="datepicker"></div>
					</div>	
					<div class="col-sm-7">			
						<p style="width:100%">
							You ate <span style="width:20%" class='well well-sm'>{{tCal()}}</span> calories on <span style="width:20%" class='well well-sm'>{{curDate | date:'M/d/yyyy'}}</span>.
						</p>
						<br>
						<p style="width:100%">
							Your caloric goal is <span style="width:20%" class='well well-sm' e-style="width:50%" editable-number="dailyGoal">{{dailyGoal}}<span class="glyphicon glyphicon-pencil"></span></span>
						</p>
						<br>
						<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addFoodModal">Add an Food <span class="glyphicon glyphicon-plus"></button>
						<br>
						<button type="button" class="btn btn-primary btn-md" data-toggle="modal" ng-click="setDate()">Select Day <span class="glyphicon glyphicon-calendar"></button>
						<br>
						<p>Select a day on the calendar and click "Select Day" to go to that day's summary.</p>
					</div>			
			  	</div>
			</div>
		</div>
		<div class='col-sm-4'>
			<div class="panel panel-default">
				<div class="panel-body">
			    	<div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
			    	<br>
					<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true" ></div>
					<br>
					<div id="status"></div>
			  	</div>
			</div>
		</div>			
	</div>
	<!-- Modal -->
	<div class="container">
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
	    						<input type="datetime" class="form-control" id="timeInput" name="timeInput" placeholder="HH:MM:SS">
	    					</div>
	    					<div class"form-group">
	    						<label for="date">Time of Meal:</label>
	    						<input id='dateInput' type="datetime" class="form-control" id="dateInput" name="dateInput" placeholder="Click to add Date">
	    					</div>
	    					<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-success" ng-click="addFood()" data-dismiss="modal">Save <span class="glyphicon glyphicon-ok"></button>
							</div>     					    					    					  					    					    					
	    				</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="panel panel-default">
			<div class="table-responsive">
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
			         		<th>Time</th>
			         		<th>Date</th>
					    </tr>
					</thead>
					<tbody>
			  			<tr ng-repeat="x in foods">
			    			<td style="width:19%"><span e-style="width: 100%" editable-text="x.food" e-name="food" e-form="rowform" e-required>{{ x.food }}</span></td>
			    			<td style="width:9%"><span e-style="width: 100%" editable-text="x.servings" e-name="servings" e-form="rowform" e-required>{{ x.servings }}</span></td>
			    			<td style="width:9%"><span e-style="width: 100%" editable-text="x.calperserv" e-name="calperserv" e-form="rowform" e-required>{{ x.calperserv }}</span></td>
			    			<td style="width:9%">{{ (x.calperserv)*(x.servings) }}</td>
			    			<td style="width:9%"><span e-style="width: 100%" editable-text="x.fat" e-name="fat" e-form="rowform" e-required>{{ (x.fat)*(x.servings) }}</span></td>
			    			<td style="width:9%"><span e-style="width: 100%" editable-text="x.carbs" e-name="carbs" e-form="rowform" e-required>{{ (x.carbs)*(x.servings) }}</span></td>
			    			<td style="width:9%"><span e-style="width: 100%" editable-text="x.protein" e-name="protein" e-form="rowform" e-required>{{ (x.protein)*(x.servings) }}</span></td>
			    			<td style="width:9%"><span e-style="width: 100%" editable-datetime="x.mealtime" e-name="time" e-form="rowform" e-required>{{ (x.mealtime) }}</span></td>
			    			<td style="width:9%">{{ x.mealdate | date:'M/d/yyyy' }}</td>
			  				<td style="width:10%">
									<form editable-form name="rowform" onaftersave="updateFood(x)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == x">
										<button type="submit" ng-disabled="rowform.$waiting" class="btn btn-success"><span class="glyphicon glyphicon-save"></span></button>
										<button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
									<div class="buttons" ng-show="!rowform.$visible">
										<button type="button" class="btn btn-default" ng-click="rowform.$show()"><span class="glyphicon glyphicon-pencil"></span></button>
										<button type="button" ng-click="removeFood(x)"class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
									</div> 		  							  					
			  				</td>
			  			</tr>
			  		</tbody>
				</table>
			</div>
		</div>
	</div>
		
	
<script src="angularModules/foodModule.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>	
</body>
</html>