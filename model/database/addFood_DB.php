<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "n02531357";
$password = "QAZxswedc123";
$dbname = "n02531357_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$food = '"' . strip_tags($_POST['foodInput']) . '"';
$servings = intval(strip_tags($_POST['servInput']));
$calperserv = intval(strip_tags($_POST['calperservInput']));
$fat = intval(strip_tags($_POST['fatInput']));
$carbs = intval(strip_tags($_POST['carbInput']));
$protein = intval(strip_tags($_POST['protInput']));
$date = "'" . strip_tags($_POST['dateInput']) . "'";


$sql= "INSERT INTO food (name, servings, calperserv, fat, carbs, protein, mealdate) 
				VALUES (" . $food . "," 
						. $servings . "," 
						. $calperserv . "," 
						. $fat . "," 
						. $carbs . "," 
						. $protein . "," 
						. $date . ")" ;
					


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 