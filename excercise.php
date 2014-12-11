<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="angular-xeditable/js/xeditable.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<link href="angular-xeditable/css/xeditable.css" rel="stylesheet">
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
	     			<li><a href="/~n02531357/WebProgramming/food.php">Food	<span class="glyphicon glyphicon-cutlery"></span></a></li>
	     			<li class="active"><a href="/~n02531357/WebProgramming/excercise.php">Excercise	<span class="glyphicon glyphicon-fire"></span></a></li>
			    </ul>
			</div>
		</div>
	</nav>	

	<div class="container">
		<div class="page-header">
			<h1>Workout Summary</h1>
		</div>
	</div>
	
	<div class="container">
		<div class='col-sm-6'>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							<span style="text-align: center, color: white"></span>						  
						</div>
					</div>				
					<p style="width:100%">
						You have burned <span style="width:20%" class='well well-sm'> {{calsburned}} </span> calories.
					</p>
					<br>
					<p style="width:100%">
						Your excercise goal is <span style="width:20%" class='well well-sm' e-style="width:50%" editable-number="dailyGoal">{{dailyGoal}} <span class="glyphicon glyphicon-pencil"></span></span>
					</p>
					<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addWorkModal">Add an Excercise <span class="glyphicon glyphicon-plus"></button>
			  	</div>
			</div>
		</div>
		<div class='col-sm-6'>
			<div class="panel panel-default">
				<div class="panel-body">
			    	To add FaceBook/Social networking
			  	</div>
			</div>
		</div>			
	</div>
	<!-- Modal -->
	<div class="modal fade" id="addWorkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="workModalTitle">Add an Excercise!</h4>
				</div>
				<div class="modal-body">
    				<form role="form" id="addWork">
    					<div class"form-group">
    						<label for="workout">Excercise:</label>
    						<input type="text" class="form-control" id="workInput" name="workInput" placeholder="What did you do?">
    					</div>
    					<div class"form-group">
    						<label for="minutes">Minutes:</label>
    						<input type="text" class="form-control" id="minInput" name="minInput" placeholder="How long?">
    					</div>
    					<div class"form-group">
    						<label for="calsburned">Calories Burned:</label>
    						<input type="text" class="form-control" id="calsburnedInput" name="calsburnedInput" placeholder="Calories Burned?">
    					</div>
    					<div class"form-group">
    						<label for="date">Date:</label>
    						<input type="datetime" class="form-control" id="dateInput" name="dateInput" placeholder="YYYY-MM-DD HH:MM:SS">
    					</div>
    					<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-success" ng-click="addWork()" data-dismiss="modal">Save <span class="glyphicon glyphicon-ok"></button>
						</div>     					    					    					  					    					    					
    				</form>
				</div>
			</div>
		</div>
	</div>	
	
</body>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>	