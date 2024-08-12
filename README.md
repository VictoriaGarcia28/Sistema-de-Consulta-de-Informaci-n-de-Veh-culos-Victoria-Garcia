# Sistema-de-Consulta-de-Informaci-n-de-Veh-culos-Victoria-Garcia

El sistema consta de 4 Vistas:

- Index
- AgregarVehiculo
- ListarVehiculo
- BuscarVehiculo

  En el index tenemos una página de inicio sencilla con un menú de navegación que nos puede llevar a agregar un vehiculo nuevo, a listar los vehiculos ya creados y a buscar un vehiculo a través del VIN.
  
-- Base de datos: `autosapp`
-- Estructura de tabla para la tabla `automoviles`
--

CREATE TABLE `automoviles` (
  `Id_vehiculo` int(11) NOT NULL,
  `Vin` varchar(50) NOT NULL,
  `NumeroMotor` varchar(50) NOT NULL,
  `Cilindrada` int(11) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Version` varchar(50) NOT NULL,
  `Año` year(4) NOT NULL,
  `Patentes_asociadas` varchar(10) DEFAULT NULL

El modelo de base de datos es esta tabla.



