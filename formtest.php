<?php
$servername = "localhost";
$username = "soham";
$password = "GMPSgmps1234";
$dbname = "names";

$name = $_POST['name']; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT url FROM ip";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "url: " . $row["url"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 