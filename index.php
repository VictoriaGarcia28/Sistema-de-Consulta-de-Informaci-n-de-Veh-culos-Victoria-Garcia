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

        /* Estilo para el título */
        h1 {
            text-align: center; /* Centrar el texto */
            font-size: 2rem; /* Tamaño de fuente reducido */
            margin-top: 30px; /* Espacio superior */
            margin-bottom: 30px; /* Espacio inferior */
            color: 	#8000FF; /* Color del texto */
        }

        /* Estilo general del cuerpo */
        body {
            font-family: Arial, sans-serif; /* Fuente general */
            background-color: #f8f9fa; /* Color de fondo de la página */
        }

        .container {
            max-width: 800px; /* Ancho máximo del contenedor */
            margin: 0 auto; 
        }


        /* Estilo para la imagen centrada */
        .img-container {
            text-align: center; 
            margin-top: 20px; 
        }

        .img-container img {
            max-width: 100%; 
            height: auto; 
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="index.php">Inicio</a>
    <a class="navbar-brand" href="agregarvehiculo.php">Agregar nuevo vehiculo</a>
    <a class="navbar-brand" href="listarvehiculos.php">Ver listado de vehiculos</a>
    <a class="navbar-brand" href="buscarvehiculos.php">Buscar vehiculos</a>
  </div>
</nav>

<div class="container">
  <h1>Sistema de Consulta de Información de Vehículos</h1>

  <div class="img-container">
    <img src="IMG/informacionvehiculo.jpg" alt="Infovehiculo">
  </div>

</div>

</body>
</html>
