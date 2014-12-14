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

$work_id = "'" . strip_tags($_POST['id']) . "'";
$work = '"' . strip_tags($_POST['excercise']) . '"';
$minutes = intval(strip_tags($_POST['minutes']));
$calburned = intval(strip_tags($_POST['calburned']));
$time = "'" . strip_tags($_POST['worktime']) . "'";
$date = "'" . strip_tags($_POST['workdate']) . "'";

$sql= "UPDATE workouts SET name=$work, minutes=$minutes, calburned=$calburned, worktime=$time, workdate=$date WHERE work_id=$work_id";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 