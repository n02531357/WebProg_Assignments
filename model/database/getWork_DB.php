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
$date='"' .strip_tags($_POST['date']) . '"';
$user='"' .strip_tags($_POST['uid']) . '"';
//$order = $conn->query("ALTER TABLE workouts ORDER BY workdate");
$result = $conn->query("SELECT work_id, name, minutes, calburned, worktime, workdate FROM workouts WHERE workdate=$date and user_id=$user");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
	$outp .= '{"id":"'  . $rs["work_id"] . '",';
    $outp .= '"excercise":"'  . $rs["name"] . '",';
    $outp .= '"minutes":"'   . $rs["minutes"] . '",';
	$outp .= '"calburned":"'   . $rs["calburned"] . '",';
	$outp .= '"worktime":"'  . $rs["worktime"] . '",';
	$outp .= '"workdate":"'  . $rs["workdate"] . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?> 