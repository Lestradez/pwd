  <?php 
  include_once ($_SERVER['DOCUMENT_ROOT'].'/pwd/dirs.php'); 
  include (INCLUDES_PATH."head.php");
  ?>    
      <title>Programacion Web Dinamica</title>
  <?php 
  include (INCLUDES_PATH."links.php");
  ?>
    <body class="vh-100 bg-light">
      <header>
        <?php
          include 'includes/menu.php';
        ?>
        <div class="p-5 text-center bg-light">
          <h1 class="mb-3">Programación Web Dinámica</h1>
          <h4 class="mb-3">Trabajos Prácticos 1, 2 y 3</h4>
          <div class="h-100 align-content-center">
            <a href="https://github.com/Lestradez/pwd" role="button" class=" text-reset text fs-1"><i class="bi bi-github " ></i></a>
          </div>
        </div>
      </header>
    <?php
      include 'includes/footer.php';
    ?>
  </body>
  <?php include (INCLUDES_PATH."scripts.php"); ?>
</html>

