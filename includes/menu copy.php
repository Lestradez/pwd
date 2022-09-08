<nav class="navbar sticky-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="<?php echo(dirname($_SERVER['REQUEST_URI'],1)) ?>">Subir</a>
        <a class="nav-link" href="http://localhost/pwd/tp_3/ejercicio_1/">Ejercicio 1</a>
        <a class="nav-link" href="http://localhost/pwd/tp_3/ejercicio_2/">Ejercicio 2</a>
        <a class="nav-link" href="http://localhost/pwd/tp_3/ejercicio_3/">Ejercicio 3 <?php echo var_dump($_SERVER) ?> </a>  
      </div>
    </div>
  </div>
</nav>
    