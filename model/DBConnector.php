<?php

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $db = "pokezone";

    $connection = new mysqli($host, $user, $password, $db);

    if($connection === false) {
        die("Connection Error: " . $connection->connect_error);
    }

?>