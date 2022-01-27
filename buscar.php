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

$resultados=mysqli_query($conexion,"SELECT * FROM datos_cliente where cedula='$cedula'") or die ("error al buscar en la base de datos");
while ($resultado=mysqli_fetch_array($resultados)) {
    echo $resultado['cedula']."       ".$resultado['nombre'];
}


?>