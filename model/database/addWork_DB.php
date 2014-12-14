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

$work = '"' . strip_tags($_POST['workInput']) . '"';
$minutes = intval(strip_tags($_POST['minInput']));
$calburned = intval(strip_tags($_POST['calburnedInput']));
$time = "'" . strip_tags($_POST['timeInput']) . "'";
$date = "'" . strip_tags($_POST['dateInput']) . "'";
$user='"' .strip_tags($_POST['uid']) . '"';


$sql= "INSERT INTO workouts (name, minutes, calburned, worktime, workdate, user_id) 
				VALUES ($work, $minutes, $calburned, $time, $date, $user)";
					


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 