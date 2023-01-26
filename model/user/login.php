<?php

    require_once('../DBConnector.php');

    $email = $connection->real_escape_string($_POST['email']);
    $pw = $connection->real_escape_string($_POST['pw']);

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $sql = "SELECT * FROM users WHERE email='$email'";

        if($result = $connection->query($sql)) {
            if($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $criptedpw = crypt($pw, '$5$rounds=5000$usesomesillystringforsalt$');

                if($row['pw'] === $criptedpw) {
                    session_start();

                    $_SESSION['email'] = $row['email'];

                    $_SESSION['logged'] = true;

                    header("location: ../../index.php");
                }else {
                    echo "Wrong Password!";
                }
            }else {
                echo "User not found!";
            }
        }else {
            echo "Error during the login!";
        }

        $connection->close();
    }

?>