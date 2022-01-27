<?php
$servidor="localhost";
$usuario="veterinaria";
$clave="animal";
$base="veterinaria";
$tabla="turnos";

$codigo=$_POST['codigo'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$animal=$_POST['animal'];
$telefono=$_POST['telefono'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexión del servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");
$insertar=" insert into turnos values('$codigo','$cedula','$nombre','$ciudad','$animal','$telefono')";
$resultado=mysqli_query($conexion,$insertar) or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("EL TURNO A SIDO GENERADO EXITOSAMENTE");
?>