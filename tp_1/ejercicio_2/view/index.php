<section class="container justify-content-center align-items-center">
  <div class="row">
    <div " class="container p-3 col-auto">
      <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
      <h3 class=" text-center mb-2 ">TP 1 - Ejercicio 2</h3>
      <div class="border bg-light border-3 rounded p-2 mt-3">
      <form method="get" action="<?php dirname( __DIR__ ) .'/controller/main.php' ?>" id="form2">
        <div class="row mb-3">
          <div class="col">
            <label for="lunes" class="form-label">Horas Cursadas Lunes: </label>
            <input 
              type="number" 
              class="form-control" 
              name="lunes" 
              id="lunes" 
              required 
            />
            <label for="martes" class="form-label"
              >Horas Cursadas Martes:
            </label>
            <input
              type="number"
              class="form-control"
              name="martes"
              id="martes"
              required
            />
            <label for="miercoles" class="form-label"
              >Horas Cursadas Miercoles:
            </label>
            <input
              type="number"
              class="form-control"
              name="miercoles"
              id="miercoles"
              required
            />
          </div>
          <div class="col">
            <label for="jueves" class="form-label"
              >Horas Cursadas Jueves:
            </label>
            <input
              type="number"
              class="form-control"
              name="jueves"
              id="jueves"
              required
            />
            <label for="viernes" class="form-label"
              >Horas Cursadas Viernes:
            </label>
            <input
              type="number"
              class="form-control mb-3"
              name="viernes"
              id="viernes"
              required
            />
          </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div>
</section>
