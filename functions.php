<?php
    //Funzione che genera la password
    function generatePassword($num) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':\"<>,.?/\\";
    $password = "";
    for ($i = 0; $i < $num; $i++) {
        //Inserisco nella variabile $passoword i caratteri in maniera randomica.
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
    }
?>

