<?php 
$title="Nuevo Auto";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");
?>
<section class="main-container p-5">
    <div class="row">
        <div class="container p-3 col-auto">
            <div class="border bg-light border-3 rounded p-2 mt-3 mb-4 shadow">
                <h3 class=" text-center mb-2 ">Cargar Nuevo Auto</h3>
                <div class="border bg-light border-3 rounded p-2 mt-3">
                    <form class="mb-3" method="get" action="./action/accionNuevoAuto.php" id="form1">
                        <div class="row">
                            <div class="col-6">
                                <label for="patente" class="form-label">Patente:</label>
                                <input
                                type="text" 
                                maxlength="10" 
                                placeholder="Patente" 
                                class="form-control mb-3"
                                id="patente"
                                name="patente"
                                required
                                />
                                <label for="Marca" class="form-label">Marca:</label>
                                <input 
                                type="text" 
                                name="Marca" 
                                id="Marca" 
                                placeholder="Marca" 
                                class="form-control mb-3" 
                                required>
                            </div>
                            <div class="col-6">
                                <label for="Modelo" class="form-label">Modelo:</label>
                                <input 
                                type="number" 
                                minlength="4" 
                                maxlength="4" 
                                placeholder="Modelo" 
                                class="form-control mb-3" 
                                name="Modelo" 
                                id="Modelo" 
                                required>
                                <label for="NroDni" class="form-label">Dni Dueño:</label> 
                                <input 
                                type="number" 
                                minlength="8" 
                                maxlength="8" 
                                placeholder="Dni Dueño" 
                                class="form-control mb-3" 
                                name="NroDni" 
                                id="NroDni" 
                                required>
                            </div>    
                        </div>      
                        <input class="btn btn-primary" type="submit" value="Cargar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once ("./layout/footer.php");
?>