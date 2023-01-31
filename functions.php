<?php
    //Controllo della password
    // if (isset($_GET["num"])) {
    // echo "<p>Password generata: " . generatePassword($_GET["num"]) . "</p>";
    // }

    //Funzione che genera la password
    function generatePassword($num) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";
    $password = "";
    for ($i = 0; $i < $num; $i++) {
        //Inserisco nella variabile $passowrd i caratteri in maniera randomica.
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
    }
?>