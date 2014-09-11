<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href=trackerCSS.css>
	</head>

	<body>
		<div class="container">
			<header>
				<h1>Nutritional Profile</h1>
			</header>
		</div>
		
		<div class="container">
			<nav class="nav-bar">
				<ul class="link-list">
					<li><a href="/">Profile</a></li>
					<li><a href="mailto:n02531357@hawkmail.newpaltz.edu?Subject=Fitness%20Tracker">Contact</a></li>
				</ul>
			</nav>
		</div>
		
		<div class="container">	
			<div id="form">
				<div class='container'>
					<div class="food">
						<p id="breakfast">Breakfast</p>
						<form>
							Food: <input type="text" name="food">
							Calories: <input type="text" name="calories">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				
				<div class='container'>
					<div class="food">
						<p id="lunch">Lunch</p>
						<form>
							Food: <input type="text" name="food">
							Calories: <input type="text" name="calories">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				
				<div class='container'>
					<div class="food">
						<p id="dinner">Dinner</p>
						<form>
							Food: <input type="text" name="food">
							Calories: <input type="text" name="calories">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				
				<div class='container'>
					<div class="food">
						<p id="snack">Snacks</p>
						<form>
							Food: <input type="text" name="food">
							Calories: <input type="text" name="calories">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				
				<div class='container'>
					<div class="workout">
						<p id="excercise">Excercise</p>
						<form>
							Exercise: <input type="text" name="workout">
							Calories: <input type="text" name="calories_burned">
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<p>Table displaying entered values and totals will go here<p>		
		</div>		
		
		<div class="container">
			<footer>
				<p>
					&copy; Copyright  by n02531357
				</p>
			</footer>		
		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>
