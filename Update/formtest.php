<?php
$y = $_POST['name'];
//$y = (string)$y;
$ip = '127.0.0.1';
$socket = stream_socket_client('tcp://'.$ip.':1220');
if ($socket) {
    $sent = stream_socket_sendto($socket, $y);
    if ($sent > 0) {
        $server_response = fread($socket, 4096);
        $json = json_decode($server_response,true);

        echo $json['flaggedTokens'][0]['suggestions'][0]['suggestion'];
        //echo $server_response;
        echo "\n";
    }
} else {
    echo 'Unable to connect to server';
}
stream_socket_shutdown($socket, STREAM_SHUT_RDWR);
?> 
