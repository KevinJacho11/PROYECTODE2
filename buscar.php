<?php 

$servidor="localhost";
$usuario="veterinaria";
$clave="animal";
$base="veterinaria";
$tabla="turnos";

$cedula=$_POST['cedula'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexión del servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");

$resultados=mysqli_query($conexion,"SELECT * FROM turnos where cedula='$cedula'") or die ("error al buscar en la base de datos");
while ($resultado=mysqli_fetch_array($resultados)) {
    echo $resultado['cedula']."       ".$resultado['nombre'];
}


?>