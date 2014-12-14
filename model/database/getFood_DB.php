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
$result = $conn->query("SELECT food_id, name, servings, calperserv, fat, carbs, protein, mealtime, mealdate FROM food WHERE mealdate=$date and user_id=$user");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
	$outp .= '{"id":"'  . $rs["food_id"] . '",';
    $outp .= '"food":"'  . $rs["name"] . '",';
    $outp .= '"servings":"'   . $rs["servings"]        . '",';
    $outp .= '"calperserv":"'. $rs["calperserv"]     . '",';
	$outp .= '"fat":"'  . $rs["fat"] . '",';
	$outp .= '"carbs":"'  . $rs["carbs"] . '",';
	$outp .= '"protein":"'  . $rs["protein"] . '",';
	$outp .= '"mealtime":"'  . $rs["mealtime"] . '",';
	$outp .= '"mealdate":"'  . $rs["mealdate"] . '"}';
}
$outp .="]";

$conn->close();

echo($outp);
?> 