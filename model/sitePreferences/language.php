<?php

    $lang=$_POST['lang'];

    $arr_cookie_options = array (
        'expires' => time() + 60*60*24*30, 
        'path' => '/', 
        'secure' => true,     
        'httponly' => true,    
        'samesite' => 'None' 
        );
    setcookie("lang", $lang, $arr_cookie_options);

    $data = [
        "message" => "Cookie setted language: " . $lang,
        "response" => 1
    ];

    echo json_encode($data);

?>