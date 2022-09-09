
  <?php 
    include_once ($_SERVER['DOCUMENT_ROOT'].'/pwd/dirs.php'); 
    include (INCLUDES_PATH."head.php");
  ?>    
  <title>Ejercicio 2 TP 3</title>
  <?php 
    include (INCLUDES_PATH."links.php");
  ?>
  <body class="bg-white">
    <header>
      <?php 
        include (INCLUDES_PATH."menu.php");
      ?>
    </header>
    <?php
      require_once('controller/main.php');
      include_once (INCLUDES_PATH."footer.php");
      include_once (INCLUDES_PATH."scripts.php");
    ?>
  </body>
</html>