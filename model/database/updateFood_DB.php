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

$food_id = "'" . strip_tags($_POST['id']) . "'";
$food_name = '"' . strip_tags($_POST['food']) . '"';
$servings = intval(strip_tags($_POST['servings']));
$calperserv = intval(strip_tags($_POST['calperserv']));
$fat = intval(strip_tags($_POST['fat']));
$carbs = intval(strip_tags($_POST['carbs']));
$protein = intval(strip_tags($_POST['prot']));
$date = "'" . strip_tags($_POST['mealdate']) . "'";

$sql= "UPDATE food SET name=" . $food_name . ","
					. "servings=" . $servings . ","
					. "calperserv=" . $calperserv . ","
					. "fat=" . $fat . ","
					. "carbs=" . $carbs . ","
					. "protein=" . $protein . ","
					. "mealdate=" . $date
					. "WHERE food_id=" . $food_id;


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 