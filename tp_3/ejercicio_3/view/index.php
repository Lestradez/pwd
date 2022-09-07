
<section>
	<div class="container mt-4 mb-4 bg-light bg-gradient shadow p-3 mb-5 bg-white rounded">
    <div class="rounded-top bg-secondary bg-gradient">
			<div class="row p-2">
				<h4 class="text-info"><i class="bi bi-pencil-square m-2"></i>Cinem@s </h4>
			</div>
		</div>
		<form method="post" action="<?php dirname( __DIR__ ) .'/controller/main.php'; ?>" id="form"  class="border rounded-bottom p-2 needs-validation" novalidate>
			<div class="row mb-3">
				<div class="col position-relative">
					<label for="titulo" class="form-label fw-bold">Titulo</label>
					<input type="text" class="form__input form-control" placeholder="Titulo"  name="titulo" id="titulo" required novalidate/>
					<div class="invalid-tooltip">
							Ingrese el título de la película. 
					</div>
				</div>
			<div class="col position-relative">
				<label for="actores" class="form-label fw-bold">Actores</label>
					<input type="text" class="form__input form-control" placeholder="Actores"  name="actores" id="actores" required/>
					<div class="invalid-tooltip">
						Ingrese los nombres de los actores separados por comas.
					</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col position-relative">
				<label for="director" class="form-label fw-bold">Director</label>
				<input type="text" class="form__input form-control" placeholder="Director"  name="director" id="director" required/>
				<div class="invalid-tooltip">
					Ingrese el nombre del Director.
				</div>
			</div>
			<div class="col position-relative">
				<label for="guion" class="form-label fw-bold">Guión</label>
				<input type="text" class="form__input form-control" placeholder="Guión"  name="guion" id="guion" required/>
				<div class="invalid-tooltip">
					Ingrese el autor del guión.
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col position-relative">
				<label for="produccion" class="form-label fw-bold">Producción</label>
				<input type="text" class="form__input form-control" placeholder="Producción" name="produccion" id="produccion" required/>
				<div class="invalid-tooltip">
					Ingrese la producción.
				</div>
			</div>
			<div class="col position-relative">
				<label for="anio" class="form-label fw-bold">Año</label>
				<input type="number" class="form__input form-control" placeholder="Año"  name="anio" id="anio" min="1900" max="2060" required/>
				<div class="invalid-tooltip">
					Ingrese el año de la película.
				</div>

			</div>
		</div>
		<div class="row mb-3">
			<div class="col position-relative">
				<label for="nacionalidad" class="form-label fw-bold">Nacionalidad</label>
				<input type="text" class="form__input form-control" placeholder="Nacionalidad"  name="nacionalidad" id="nacionalidad" required/>
				<div class="invalid-tooltip">
					Ingrese su nacionalidad.
				</div>

			</div>
			<div class="col position-relative">
				<label for="seleccion_genero" class="form-label fw-bold">Género</label>
				<select name="genero" class="form-select" aria-label="select example" id="seleccion_genero" required>
					<option selected disabled value="">Seleccione una opción...</option>
					<option value="comedia">Comedia</option>
					<option value="drama">Drama</option>
					<option value="terror">Terror</option>
					<option value="romanticas">Románticas</option>
					<option value="suspenso">Suspenso</option>
					<option value="otras">Otras</option>
				</select>
				<div class="invalid-tooltip">
					Debe seleccionar al menos un género.
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col position-relative">
				<label for="duracion" class="form-label fw-bold">Duración (minutos)</label>
				<input type="number" class="form__input form-control" placeholder="Duración" name="duracion" id="duracion" maxlength="3" required/>
				<div class="invalid-tooltip">
					Ingrese la cantidad de mintutos que dura la película.
				</div>
			</div>
			<div class="col ">
				<div class="pb-3 fw-bold">Restricciones de edad</div>
				<div id="edad_radio_group" class="form-checks">
					<div class="form-check form-check-inline">
						<input type="radio" value="todos" class="form-check-input" id="todos" name="restriccion_edad" required/>
						<label class="form-check-label" for="todos">
							Todo Público
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" value="mayor7" class="form-check-input" id="mayor7" name="restriccion_edad" required/>
						<label class="form-check-label" for="mayor7">
							Mayores de 7 años
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input type="radio" value="mayor18" class="form-check-input" id="mayor18" name="restriccion_edad" required/>
						<label class="form-check-label" for="mayor18">
							Mayores de 18 años
						</label>
					</div>
					<div class="invalid-tooltip">
						Debe seleccionar alguna restricción.
					</div>
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col position-relative">
					<label for="sinopsis" class="form-label fw-bold">Sinopsis</label>
					<textarea class="form-control" placeholder="Sinopsis" id="sinopsis" name="sinopsis" minlength="10" maxlength="300" style="height: 100px" required></textarea>
					<div class="invalid-tooltip">
    				Ingrese un texto de al menos 10 letras.
    			</div>
				</div>
			</div>
			<div class="d-grid mt-4">
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<button class="btn btn-primary me-md-2" type="submit">Enviar</button>
					<button class="btn btn-outline-dark" type="reset">Borrar</button>
				</div>
			</div>
		</form>
	</div>
	<script src="..\ejercicio_4\view/css/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
  <script src="..\ejercicio_4\view/js/main.js"></script>
</section>