<html>
  <head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Show Password</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Generatore di password</h1>
            </div>
        </div>
        <form action="./showpassword.php" method="GET">
            <div class="row">
                <div class="col">
                    <h4>Genera la tua password</h4>
                    <input type="number" name="num">
                    <button type="submit" value="Genera password">Crea Password</button>
                </div>
            </div>
        </form>
    </div>
 </body>
</html>
