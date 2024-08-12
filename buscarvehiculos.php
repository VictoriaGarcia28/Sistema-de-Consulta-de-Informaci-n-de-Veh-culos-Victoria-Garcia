<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vehículo</title>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
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
        </style>
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="index.php">Inicio</a>
    <a class="navbar-brand" href="agregarvehiculo.php">Agregar nuevo vehiculo</a>
    <a class="navbar-brand" href="listarvehiculos.php">Ver listado de vehiculos</a>
    <a class="navbar-brand" href="buscarvehiculos.php">Buscar vehiculos</a>
  </div>
</nav>

<div class="container p-4">
    <h2 class="text-center">Buscar Vehículo por VIN</h2>

    <form action="buscarvehiculos.php" method="POST" class="form-container">
        <div class="mb-3">
            <label for="Vin" class="form-label">VIN:</label>
            <input type="text" name="Vin" class="form-control" placeholder="Ingrese el VIN del vehículo" required>
        </div>
        <button type="submit" name="buscar" class="btn btn-primary">Buscar</button>
    </form>

    <?php if (isset($_POST['buscar'])): ?>
        <?php
        include('db.php');
        $Vin = $_POST['Vin'];

        $query = "SELECT * FROM automoviles WHERE Vin = ?";
        $stmt = mysqli_prepare($conexion, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $Vin);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="mt-4">';
                echo '<h3>Datos del Vehículo</h3>';
                echo '<ul class="list-group">';
                echo '<li class="list-group-item"><strong>VIN:</strong> ' . htmlspecialchars($row['Vin']) . '</li>';
                echo '<li class="list-group-item"><strong>Número Motor:</strong> ' . htmlspecialchars($row['NumeroMotor']) . '</li>';
                echo '<li class="list-group-item"><strong>Cilindrada:</strong> ' . htmlspecialchars($row['Cilindrada']) . '</li>';
                echo '<li class="list-group-item"><strong>Marca:</strong> ' . htmlspecialchars($row['Marca']) . '</li>';
                echo '<li class="list-group-item"><strong>Modelo:</strong> ' . htmlspecialchars($row['Modelo']) . '</li>';
                echo '<li class="list-group-item"><strong>Versión:</strong> ' . htmlspecialchars($row['Version']) . '</li>';
                echo '<li class="list-group-item"><strong>Año:</strong> ' . htmlspecialchars($row['Año']) . '</li>';
                echo '<li class="list-group-item"><strong>Patentes Asociadas:</strong> ' . htmlspecialchars($row['Patentes_asociadas']) . '</li>';
                echo '</ul>';
                echo '</div>';
            } else {
                echo '<div class="alert alert-warning mt-4">VIN Ingresado no existe en el sistema.</div>';
            }

            mysqli_stmt_close($stmt);
        } else {
            echo '<div class="alert alert-danger mt-4">Error en la consulta: ' . mysqli_error($conexion) . '</div>';
        }

        mysqli_close($conexion);
        ?>
    <?php endif; ?>
</div>

</body>
</html>
