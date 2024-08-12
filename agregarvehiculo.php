<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
         /* Estilo para el menú de navegación */
         .navbar-custom {
            background-color: #e3f2fd; 
        }

        .navbar-custom .navbar-brand {
            color: #007bff; 
            font-weight: bold; 
        }

        .navbar-custom .navbar-brand:hover {
            color: #0056b3; 
            text-decoration: underline; 
        }

        /* Personalización para centrar el formulario */
        .form-container {
            max-width: 550px; /* Ancho del contenedor reducido */
            margin: 0 auto; /* Centra horizontalmente */
            margin-top: 20px; /* Espacio desde la parte superior */
        }

        .form-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .form-label {
            margin-right: 5px;
            flex-basis: 30%; /* Ancho del label */
            text-align: right; /* Alineación del texto a la derecha */
        }

        .form-control {
            flex-basis: 70%; /* Ancho del input */
            max-width: 250px; /* Ancho máximo para los inputs */
        }

        h2{
            margin-top:35px;
            text-align:center;
        }
    </style>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="index.php">Inicio</a>
    <a class="navbar-brand" href="agregarvehiculo.php">Agregar nuevo vehiculo</a>
    <a class="navbar-brand" href="listarvehiculos.php">Ver listado de vehiculos</a>
    <a class="navbar-brand" href="buscarvehiculos.php">Buscar vehiculos</a>
  </div>
</nav>

<h2>Agregar nuevo automovil</h2>

<div class="container p-4 form-container"> <!---Inicio contenedor principal--->

<div class="card card-body text-center"> <!--Inicio card-body-->

    <form action="guardar_vehiculos.php" method="POST"> <!--Inicio formulario agregar nuevo vehiculo--->

        <div class="form-group"> <!---agregar vin--->
            <label for="VIN" class="form-label">VIN:</label>
            <input type="text" name="Vin" class="form-control" placeholder="Ingrese el VIN del vehiculo">
        </div>    

        <div class="form-group"> <!---agregar n° motor--->
            <label for="numeromotor" class="form-label">Número Motor:</label>
            <input type="text" name="NumeroMotor" class="form-control" placeholder="Ingrese el número de motor">
        </div>

        <div class="form-group"> <!---agregar cilindrada--->
            <label for="cilindrada" class="form-label">Cilindrada:</label>
            <input type="number" name="Cilindrada" class="form-control" placeholder="Ingrese cilindrada">
        </div>  

        <div class="form-group"> <!---agregar marca--->
            <label for="marca" class="form-label">Marca:</label>
            <input type="text" name="Marca" class="form-control" placeholder="Ingrese la marca del vehículo">
        </div>    

        <div class="form-group"> <!---agregar modelo--->
            <label for="modelo" class="form-label">Modelo:</label>
            <input type="text" name="Modelo" class="form-control" placeholder="Ingrese el modelo del vehiculo">
        </div>  

        <div class="form-group"> <!---agregar version--->
            <label for="version" class="form-label">Versión:</label>
            <input type="text" name="Version" class="form-control" placeholder="Ingrese la versión">
        </div> 

        <div class="form-group"> <!---agregar año--->
            <label for="año" class="form-label">Año:</label>
            <input type="text" id="yearpicker" name="Año" class="form-control" placeholder="Ingrese el año">
        </div>

        <div class="form-group"> <!---agregar patentes asociadas--->
            <label for="patentes" class="form-label">Patentes Asociadas:</label>
            <input type="text"  name="Patentes_asociadas" class="form-control" placeholder="Patentes asociadas">
        </div>

        <br>

        <input type="submit" class="btn btn-success w-100" name="guardar" value="Guardar">

    </form> <!--Fin formulario agregar nuevo vehiculo--->

</div> <!--Fin card-body-->

</div> <!--Fin contenedor principal-->

<script>
$(document).ready(function(){
    $('#yearpicker').datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, 1));
        }
    }).focus(function () {
        $(".ui-datepicker-month").hide();
        $(".ui-datepicker-calendar").hide();
    });
});
</script>
