<?php 
$title="Nuevo Auto";
include_once ("../config.php"); 
include_once ("./layout/head.php");
include_once ("./layout/navbar.php");
?>



<div class="">
            <h3>Datos necesarios </h3>

            <form name="nuevoAuto" action="./action/accionNuevoAuto.php" method="POST">
                <label for="Patente">Patente:</label><br>
                <input type="text" name="Patente" id="Patente" required><br>
                <label for="Marca">Marca:</label><br>
                <input type="text" name="Marca" id="Marca" required><br>
                <label for="Modelo">Modelo:</label><br>
                <input type="number" name="Modelo" id="Modelo" required><br>
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="Nombre" id="Nombre" required><br>
                <label for="apellido">Apellido:</label><br>
                <input type="text" name="Apellido" id="Apellido" required><br>
                <label for="dni">DNI:</label><br>
                <input type="number" name="NroDni" id="NroDni" required><br>
                <label for="telefono">Telefono:</label><br>
                <input type="tel" name="Telefono" id="Telefono" required><br>
                <label for="fechaNac">Fecha de Nacimiento:</label><br>
                <input type="date" name="fechaNac" id="fechaNac" required><br>
                <label for="domicilio">Domicilio:</label><br>
                <input type="text" name="Domicilio" id="Domicilio" required><br><br>
                <input type="submit" name="cargar" value="Cargar">


            </form>


        </div>




<?php
include_once ("./layout/footer.php");
?>