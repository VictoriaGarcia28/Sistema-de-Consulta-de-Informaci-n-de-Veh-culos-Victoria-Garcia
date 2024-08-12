<?php
include('db.php');

// Consulta para obtener todos los datos de la tabla automoviles
$query = "SELECT * FROM automoviles";
$result = mysqli_query($conexion, $query);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Vehículos</title>
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar" style="background-color: #e3f2fd;">
  <a href="index.php" class="navbar-brand">Vehiculos</a>
</nav>

<div class="container p-4">
    <h2>Listado de Vehículos</h2>

    <!-- Tabla de datos -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>VIN</th>
                <th>Número Motor</th>
                <th>Cilindrada</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Versión</th>
                <th>Año</th>
                <th>Patentes Asociadas</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['Id_vehiculo']); ?></td>
                    <td><?php echo htmlspecialchars($row['Vin']); ?></td>
                    <td><?php echo htmlspecialchars($row['NumeroMotor']); ?></td>
                    <td><?php echo htmlspecialchars($row['Cilindrada']); ?></td>
                    <td><?php echo htmlspecialchars($row['Marca']); ?></td>
                    <td><?php echo htmlspecialchars($row['Modelo']); ?></td>
                    <td><?php echo htmlspecialchars($row['Version']); ?></td>
                    <td><?php echo htmlspecialchars($row['Año']); ?></td>
                    <td><?php echo htmlspecialchars($row['Patentes_asociadas']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-02tEtT9JzLmP38MY8W13J6v0A1Rp5C2x8C2GibW9joO2WnF4kLKO4RF1pDHS8E" crossorigin="anonymous"></script>

</body>
</html>

<?php
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
