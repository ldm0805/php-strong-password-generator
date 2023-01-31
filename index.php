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
<html>
  <head>
    <title>Generatore di password</title>
  </head>
  <body>
    <h1>Generatore di password</h1>
    <form action="index.php" method="GET">
        <div class="row">
            <div class="col-12">
                <h4>Genera la tua password</h4>
                <input type="number" name="num">
                <button type="submit" value="Genera password">Crea Password</button>
                <h1><?php echo generatePassword($_GET["num"]) ?></h1>

            </div>
        </div>
    </form>
  </body>
</html>
