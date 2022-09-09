<section class="container justify-content-center align-items-center">
  <div class="row">
    <div " class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">TP 1 - Ejercicio 1</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <form class="mb-3" method="post" action="<?php dirname( __DIR__ ) .'/controller/main.php'; ?>" id="form1">
        <label for="number" class="form-label">Ingrese un número:</label>
        <input
          type="number"
          class="form-control mb-3"
          id="number"
          name="number"
          required
        />
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div>
</section>
