<?php
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

$sql = "SELECT * FROM food";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["food_id"] . " - Name: " . $row["name"] . " " . "Servings: " . $row["servings"] . " Calories: "
        . $row["calperserv"] . " Fat: " . $row["fat"] . " Carbs: " . $row["carbs"] . " Protein: " . $row["protein"]; 
    }
} else {
    echo "0 results";
}
$conn->close();
?> 