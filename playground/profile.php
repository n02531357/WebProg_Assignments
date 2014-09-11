<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	</head>
	
	<style>
	    .form-horizontal {
	        padding-top:25px;
	        padding-bottom:25px;
	    }
	</style>

	<body>
	<div class="container">
		<div class="page-header">
			<h1>Nutritional Profile</h1>
		</div>
	</div>
	
	<div class="container">	
		<ul class="nav nav-pills">
	  		<li><a href="index.php">Home</a></li>
	  		<li class="active"><a href="profile.php">Profile</a></li>
	 		<li><a href="#">Contact</a></li>
		</ul>
	</div>	
	
	<div class="container">
        <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputFood" class="col-sm-2 control-label">Food</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputFood" placeholder="What you ate">
                </div>
              </div>
              <div class="form-group">
                <label for="inputCalories" class="col-sm-2 control-label">Calories</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputCalories" placeholder="Calories consumed">
                </div>
              </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <select>
                      <option>Breakfast</option>
                      <option>Lunch</option>
                      <option>Dinner</option>
                      <option>Snack</option>
                    </select>
                    </div>
                </div>
    
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Add to food diary</button>
                </div>
              </div>
        </form>	
	</div>
	
	<div class="container">
        <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="inputWorkout" class="col-sm-2 control-label">Food</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputWorkout" placeholder="Excercise title">
                </div>
              </div>
              <div class="form-group">
                <label for="inputCalories" class="col-sm-2 control-label">Calories</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputCalories" placeholder="Calories burned">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Add to excercise diary</button>
                </div>
              </div>
        </form>	
	</div>
	
	<div class="container">
		<p>
			Table to be filled with data.
		</p>
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
