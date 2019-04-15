<?php
//echo 'hi';
$socket = stream_socket_client('tcp://127.0.0.1:1220');
if ($socket) {
    $sent = stream_socket_sendto($socket, 'message');
    if ($sent > 0) {
        $server_response = fread($socket, 4096);
        echo $server_response;
    }
} else {
    echo 'Unable to connect to server';
}
stream_socket_shutdown($socket, STREAM_SHUT_RDWR);
?>