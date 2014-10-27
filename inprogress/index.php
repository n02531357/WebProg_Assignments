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
			<a href="/~n02531357/WebProgramming/WebProg_Assignments/playground/">Home</a>
			</li>
			<li>
			<a href="/~n02531357/WebProgramming/WebProg_Assignments/playground/profile.php">Profile</a>
			</li>
			<li>
			<a href="#">Forum</a>
			</li>
			<li>
			<a href="#">Contact</a>
			</li>
		</ul>
	</div>
	</header>
	<div class="container">
		<div class="page-header">
			<h1>Welcome</h1>
			<p>
				This web application's purpose is to assist the user in tracking their nutritional and fitness goals.
			</p>
		</div>
	</div>
	<div class="container" style="padding-bottom: 25px;">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-3">
				<h3><em>Sign in!</em></h3>
				<form role="form">
					<div class="form-group">
						<label for="signInEmail">Email address</label>
						<input type="email" class="form-control" id="signInEmail" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="signInPw">Password</label>
						<input type="password" class="form-control" id="signInPw" placeholder="Password">
					</div>
					<button type="button" class="btn btn-success">Sign in</button>
				</form>
			</div>
			<div class="col-md-2" style="text-align: center; margin-top: 50px;">
				<h2><em>or</em></h2>
			</div>
			<div class="col-md-3">
				<h3><em>Sign up!</em></h3>
				<form role="form">
					<div class="form-group">
						<label for="signUpEmail">Email address</label>
						<input type="email" class="form-control" id="signUpEmail" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="signUpPw">Password</label>
						<input type="password" class="form-control" id="signUpPw" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="signUpPwCheck">Confirm Password</label>
						<input type="password" class="form-control" id="signUpPwCheck" placeholder="Password again">
					</div>
					<div class="form-group">
						<label for="signUpFName">First Name</label>
						<input type="name" class="form-control" id="signUpFName" placeholder="Ex. John">
					</div>
					<div class="form-group">
						<label for="signUpLName">Last Name</label>
						<input type="name" class="form-control" id="signUpLName" placeholder="Ex. Smith">
					</div>
					<button type="button" class="btn btn-success">Sign up</button>
				</form>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>