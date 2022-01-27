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



mysqli_query($conexion,"UPDATE turnos SET codigo = '$codigo', cedula = '$cedula', nombre = '$nombre', 
ciudad = '$ciudad', animal = '$animal', telefono = '$telefono' where codigo='$codigo'") or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("LOS DATOS SE HAN EDITADO EXITOSAMENTE");


?>