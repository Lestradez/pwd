<?php 
    include_once ($_SERVER['DOCUMENT_ROOT'].'/pwd/dirs.php'); 
    include (INCLUDES_PATH."head.php");
  ?>    
  <title>Trabajo Práctico 1</title>
  <?php 
    include (INCLUDES_PATH."links.php");
  ?>
  <body class="vh-100 bg-light">
  <header >
  <?php 
        include (INCLUDES_PATH."menu.php");
      ?>
    <div class="p-5 text-center bg-light">
      <h1 class="mb-3">Programación Web Dinámica</h1>
      <h2 class="mb-3">Trabajo Práctico N°1</h2>
    </div>
  </header>
  <?php
     include (INCLUDES_PATH."footer.php");
     include (INCLUDES_PATH."scripts.php"); 
  ?>
</body>
</html>  