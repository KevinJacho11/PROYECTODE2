<?php
$servidor="localhost";
$usuario="veterinaria";
$clave="animal";
$base="veterinaria";
$tabla="turnos";

$cedula=$_POST['cedula'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexión del servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");

mysqli_query($conexion,"DELETE FROM turnos where cedula='$cedula'") or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("EL TURNO A SIDO ELIMINADO EXITOSAMENTE");
?>