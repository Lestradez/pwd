<section class="container justify-content-center align-items-center">
  <div class="row">
    <div " class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">TP 3 - Ejercicio 1</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
        <form id="formFile" name="formFile" class="mb-3" method="POST" action="<?php dirname( __DIR__ ) .'/controller/main.php'; ?>" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for="formFile" class="form-label">Seleccione un archivo. Debe ser .doc o .pdf y su tamaño menor a 2mb</label>
            <input class="form-control" type="file" id="formFile" name="formFile" accept=".doc, .pdf" required>
          </div>
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
      </div>
    </div>
  </div>
</div>
</section>
