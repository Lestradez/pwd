<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programacion Web Dinamica</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <h1>Programacion Web Dinamica</h1>
  </header>
  <nav>
      <?php
          include 'includes/menu.php';
      ?>
  </nav>
  <section>
    <article>
      <h2 id="tp1">Trabajo Practico 1</h2>
      <p>
        <?php
            include 'includes/tp_1/index.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="tp2">Trabajo Practico 2</h2>
      <p>
        <?php
            include 'includes/tp_2/index.php';
        ?>
      </p>
    </article>
    <article>         
      <h2 id="tp3">Trabajo Practico 3</h2>
      <p>
        <?php
            include 'includes/tp_3/index.php';
        ?>
      </p>
    </article>
  </section>          
  <footer>
      <p>Lestradez 2022 - Programacion Web Dinamica - Tecnicatura Universitaria en Desarrollo Web</p>
  </footer>
</body>
</html>

