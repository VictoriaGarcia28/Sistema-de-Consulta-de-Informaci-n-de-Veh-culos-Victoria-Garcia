<?php

include('db.php');

if (isset($_POST['guardar'])){
    $Vin = $_POST['Vin'];
    $NumeroMotor = $_POST['NumeroMotor'];
    $Cilindrada = $_POST['Cilindrada'];
    $Marca = $_POST['Marca'];
    $Modelo = $_POST['Modelo'];
    $Version = $_POST['Version'];
    $Año = $_POST['Año'];
    $Patentes_asociadas = $_POST['Patentes_asociadas'];

    // Consulta SQL 
    $query = "INSERT INTO automoviles (Vin, NumeroMotor, Cilindrada, Marca, Modelo, Version, Año, Patentes_asociadas) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);

    if ($stmt) {
        // Vincular los parámetros con el tipo de datos adecuado
        mysqli_stmt_bind_param($stmt, "ssisssss", $Vin, $NumeroMotor, $Cilindrada, $Marca, $Modelo, $Version, $Año, $Patentes_asociadas);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            // Redirigir a la página de listado
            header("Location: listarvehiculos.php");
            exit();
        } else {
            echo 'Error al guardar los datos: ' . mysqli_stmt_error($stmt);
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo 'Error en la preparación de la consulta: ' . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}

?>

