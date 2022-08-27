
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programacion Web Dinamica</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
  <header>
    <h1 class="text-center">Trabajo Práctico N°1</h1>
  </header>
  <?php
    require_once ('includes/menu.php');
  ?>
  <section>
    <article>
      <h2 id="ejercicio1">Ejercicio 1</h2>
      <p>
        <?php
            include 'view/ejercicio1.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="ejercicio2">Ejercicio 2</h2>
      <p>
        <?php
            include 'view/ejercicio2.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="ejercicio3">Ejercicio 3</h2>
      <p>
        <?php
            include 'view/ejercicio3.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="ejercicio4">Ejercicio 4</h2>
      <p>
        <?php
            include 'view/ejercicio4.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="ejercicio5">Ejercicio 5</h2>
      <p>
        <?php
            include 'view/ejercicio5.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="ejercicio6">Ejercicio 6</h2>
      <p>
        <?php
            include 'view/ejercicio6.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="ejercicio7">Ejercicio 7</h2>
      <p>
        <?php
            include 'view/ejercicio7.php';
        ?>
      </p>
    </article>
    <article>
      <h2 id="ejercicio8">Ejercicio 8</h2>
      <p>
        <?php
            include 'view/ejercicio8.php';
        ?>
      </p>
    </article>
  </section>          
  <footer>
      <p>Lestradez 2022 - Programacion Web Dinamica - Tecnicatura Universitaria en Desarrollo Web</p>
  </footer>
</body>
</html>

