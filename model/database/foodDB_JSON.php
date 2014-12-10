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

$result = $conn->query("SELECT name, servings, calperserv, fat, carbs, protein, mealdate FROM food");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"food":"'  . $rs["name"] . '",';
    $outp .= '"servings":"'   . $rs["servings"]        . '",';
    $outp .= '"calperserv":"'. $rs["calperserv"]     . '",';
	$outp .= '"fat":"'  . $rs["fat"] . '",';
	$outp .= '"carbs":"'  . $rs["carbs"] . '",';
	$outp .= '"protein":"'  . $rs["protein"] . '",';
	$outp .= '"mealdate":"'  . $rs["mealdate"] . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?> 