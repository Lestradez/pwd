<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programacion Web Dinamica</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Programacion Web Dinamica</h1>
        </div>
        <div class="content">
            <?php
                include 'includes/menu.php';
            ?>
            <div class="main">
              <h2 id="tp1">Trabajo Practico 1</h2>
              <p>
                  <?php
                      include 'includes/tp_1/index.php';
                  ?>
              </p>
              <h2 id="tp2">Trabajo Practico 2</h2>
              <p>
                  <?php
                      include 'includes/tp_2/index.php';
                  ?>
              </p>
              <h2 id="tp3">Trabajo Practico 3</h2>
              <p>
                  <?php
                      include 'includes/tp_3/index.php';
                  ?>
              </p>
            </div>    
        </div>
        <div class="footer">
            <p>Lestradez 2022 - Programacion Web Dinamica - Tecnicatura Universitaria en Desarrollo Web</p>
        </div>

    </div>
</body>
</html>

