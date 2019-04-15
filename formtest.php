<?php
//$name = $_POST['name']; 
//echo $_SERVER['REQUEST_METHOD'];
//print_r($_POST);

$servername = "localhost";
$username = "soham";
$password = "GMPSgmps1234";
$dbname = "names";


//echo $name;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT url FROM ip";
$sql = "SELECT url FROM ip WHERE website LIKE '".$_POST['name']."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "url: " . $row["url"]."<br>";
        //echo $_POST['name'];
        $ip = $row["url"];
    }
} else {
    echo "0 results";
}
$conn->close();

$socket = stream_socket_client('tcp://'.$ip.':1220');
if ($socket) {
    $sent = stream_socket_sendto($socket, 'message');
    if ($sent > 0) {
        $server_response = fread($socket, 4096);
        echo $server_response;
        echo "\n";
    }
} else {
    echo 'Unable to connect to server';
}
stream_socket_shutdown($socket, STREAM_SHUT_RDWR);
?> 