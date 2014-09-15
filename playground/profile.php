<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<style type="text/css">
    .page-header {
    position: relative;
    padding: 30px 15px;
    color: #FFFFFF;
    text-align: center;
    text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
    background-image: linear-gradient(to bottom, #006600 0px, #009933 100%);
    background-repeat: repeat-x;
  }
  .page-header p {
    color: #A6CAA6;
    text-align: center;
    text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
  }
  a, a:hover {
    color: #006600;
  }
</style>
<body>
<div class="container">
	<header>
	<div class="container">
		<ul class="nav navbar-nav">
			<li class="active">
			<a href="/~n02531357/WebProgramming/WebProg_Assignments/playground/">
			Home </a>
			</li>
			<li>
			<a href="/~n02531357/WebProgramming/WebProg_Assignments/playground/profile.php">
			Profile </a>
			</li>
			<li>
			<a href="#">
			Forum </a>
			</li>
			<li>
			<a href="#">
			Contact </a>
			</li>
		</ul>
	</div>
	</header>
	<div class="container">
		<div class="page-header">
			<h1>
			Nutritional Profile </h1>
		</div>
	</div>
	<div class="container">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active">
			<a href="#summary" role="tab" data-toggle="tab">
			Progress <span class="glyphicon glyphicon-road">
			</a>
			</li>
			<li>
			<a href="#food" role="tab" data-toggle="tab">
			Food <span class="glyphicon glyphicon-cutlery">
			</span>
			</a>
			</li>
			<li>
			<a href="#excercise" role="tab" data-toggle="tab">
			Excercise <span class="glyphicon glyphicon-fire">
			</a>
			</li>
			<li>
			<a href="#messages" role="tab" data-toggle="tab">
			Goals <span class="glyphicon glyphicon-star">
			</a>
			</li>
		</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="summary">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
								Today's Calorie Goal: </h3>
							</div>
							<div class="panel-body">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" data-toggle="tooltip" data-placement="left" title="You have consumed 1000 of your 2000 calorie goal.">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
								Today's Excercise Goal: </h3>
							</div>
							<div class="panel-body">
								<div class="progress">
									<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" data-toggle="tooltip" data-placement="right" title="You have burned 1000 of your 2000 calorie goal.">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
							Today's Meal Graph: </h3>
						</div>
						<div class="panel-body">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
							Today's Excercise Graph: </h3>
						</div>
						<div class="panel-body">
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="tab-pane fade" id="food">
				<div class "row">
						<form class="form-inline" role="form">
							<div class="form-group">
								<label class="sr-only" for="Time">
								Time </label>
								<div class="col-md-2">
									<input type="text" class="form-control" id="timeOfMeal" placeholder="Time of Meal (Ex. 12:33)">
								</div>
							<div class="col-md-1">
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" id="foodTitle" placeholder="Name of food">
							</div>
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" id="servings" placeholder="# of Servings">
						</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-2">
						<input type="text" class="form-control" id="caloriesps" placeholder="Calories per serving">
					</div>
				<div class="col-md-1">
					<button type="submit" class="btn btn-success">
					Add <span class="glyphicon glyphicon-pencil">
					</button>
				</div>
				</div>
				</form>
			</div>
		<div class="container">
			<div class="table-responsive">
				<table class="table table-hover">
				<thead>
				<tr>
					<th>
						 Time
					</th>
					<th>
						 Food
					</th>
					<th>
						 Servings
					</th>
					<th>
						 Calories per Serving
					</th>
					<th>
						 Total Calories
					</th>
				</tr>
				</thead>
				</table>
			</div>
		</div>
	</div>
	<div class="tab-pane fade" id="excercise">
		<p>
			 Excercise
		</p>
	</div>
	<div class="tab-pane fade" id="messages">
				<p>
			 		messages
				</p>
	</div>
	
	</div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
</script>
</body>
</html>