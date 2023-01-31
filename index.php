<?php
include __DIR__. './functions.php';
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
