<nav class="navbar sticky-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="<?php echo(dirname($_SERVER['REQUEST_URI'],1)) ?>">Inicio</a>
        <a class="nav-link" href="<?php $_TP1_URL ?>">Trabajo Práctico 1</a>
        <a class="nav-link" href="<?php $_TP2_URL ?>">Trabajo Práctico 2</a>
        <a class="nav-link" href="<?php $_TP3_URL ?>">Trabajo Práctico 3</a>  
      </div>
    </div>
  </div>
</nav>