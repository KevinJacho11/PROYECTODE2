<?php

$servidor="localhost";
$usuario="dato";
$clave="12345";
$base="vacunas";
$tabla="datos_vacunados";

$codigo=$_POST['codigo'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$edad=$_POST['edad'];
$num_dosis=$_POST['num_dosis'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexión del servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");



mysqli_query($conexion,"UPDATE datos_vacunados SET codigo = '$codigo', cedula = '$cedula', nombre = '$nombre', 
ciudad = '$ciudad', edad = '$edad', num_dosis = '$num_dosis' where codigo='$codigo'") or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("LOS DATOS SE HAN EDITADO EXITOSAMENTE");

/*mysqli_query ("UPDATE datos_vacunados SET codigo = '$codigo', cedula = '$cedula', nombre = '$nombre', 
ciudad = '$ciudad', edad = '$edad', num_dosis = '$num_dosis'
WHERE codigo = '$codigo'");
mysqli_close($conexion);
echo" Loa datos se an actualizado";*/

?>