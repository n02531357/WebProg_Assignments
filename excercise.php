<!DOCTYPE html>
<html lang="en">
<head>
	<title>Workout Summary</title>
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

<body id="workoutBody" ng-app="workTableApp" ng-controller="workTableController">

	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">PhatTrack</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
	     			<li><a href="/~n02531357/WebProgramming/">Home	<span class="glyphicon glyphicon-home"></span></a></li>
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
							Burned <span style="width:20%" class='well well-sm'>{{tCal()}}</span> calories on <span style="width:20%" class='well well-sm'>{{curDate | date:'M/d/yyyy'}}</span>.
						</p>
						<br>
						<p style="width:100%">
							Your excercise goal is <span style="width:20%" class='well well-sm' e-style="width:50%" editable-number="dailyGoal">{{dailyGoal}}<span class="glyphicon glyphicon-pencil"></span></span>
						</p>
						<br>
						<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#addWorkModal">Add an Excercise <span class="glyphicon glyphicon-plus"></button>
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
    						<input type="text" class="form-control" id="calburnedInput" name="calburnedInput" placeholder="Calories Burned?">
    					</div>
    					<div class"form-group">
    						<label for="date">Time of Workout:</label>
    						<input type="datetime" class="form-control" id="timeInput" name="timeInput" placeholder="HH:MM:SS">
    					</div>
    					<div class"form-group">
    						<label for="date">Date:</label>
    						<input type="datetime" class="form-control" id="dateInput" name="dateInput" placeholder="Click to Enter Date">
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
	
	<div class="container" style="text-align: center">
		
	</div>
	
	<div class="container">
		<div class="panel panel-default">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
			          		<th>Excercise</th>
			          		<th>Minutes Performed</th>
			         		<th>Calories Burned</th>
			         		<th>Time</th>
			         		<th>Date</th>
					    </tr>
					</thead>
					<tbody>
			  			<tr ng-repeat="x in workouts">
			    			<td style="width:15%"><span e-style="width: 100%" editable-text="x.excercise" e-name="work" e-form="rowform" e-required>{{ x.excercise }}</span></td>
			    			<td style="width:10%"><span e-style="width: 100%" editable-text="x.minutes" e-name="minutes" e-form="rowform" e-required>{{ x.minutes }}</span></td>
			    			<td style="width:10%"><span e-style="width: 100%" editable-text="x.calburned" e-name="calburned" e-form="rowform" e-required>{{ x.calburned }}</span></td>
			    			<td style="width:15%"><span e-style="width: 100%" editable-datetime="x.worktime" e-name="time" e-form="rowform" e-required>{{ x.worktime | date:'hh:mm'}}</span></td>
			    			<td style="width:15%">{{ x.workdate | date:'MM/dd/yyyy'}}</td>
			  				<td style="width:10%">
									<form editable-form name="rowform" onaftersave="updateWork(x)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == x">
										<button type="submit" ng-disabled="rowform.$waiting" class="btn btn-success"><span class="glyphicon glyphicon-save"></span></button>
										<button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
									<div class="buttons" ng-show="!rowform.$visible">
										<button type="button" class="btn btn-default" ng-click="rowform.$show()"><span class="glyphicon glyphicon-pencil"></span></button>
										<button type="button" ng-click="removeWork(x)"class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
									</div> 		  							  					
			  				</td>
			  			</tr>
			  		</tbody>
				</table>
			</div>
		</div>
	</div>	
</body>

<script src="angularModules/workModule.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>	