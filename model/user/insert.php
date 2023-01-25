<?php

    require_once('../DBConnector.php');

    $email = $connection->real_escape_string($_POST['email']);
    $pw = $connection->real_escape_string($_POST['pw']);

    $criptedpw = crypt($pw, '$5$rounds=5000$usesomesillystringforsalt$');

    $sql = "INSERT INTO users(email,pw) VALUES('$email','$criptedpw')";

    if($connection->query($sql) === true) {
        $data = [
            "message" => "Registration was successful",
            "response" => 1
        ];
        echo json_encode($data);
    }else {
        $data = [
            "message" => $connection->error,
            "response" => 0
        ];
        echo json_encode($data);
    }

?>