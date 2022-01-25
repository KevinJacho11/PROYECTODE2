<?php 

$servidor="localhost";
$usuario="dato";
$clave="12345";
$base="vacunas";
$tabla="datos_vacunados";

$cedula=$_POST['cedula'];

/*$codigo=$_POST['codigo'];/*
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$edad=$_POST['edad'];
$num_dosis=$_POST['num_dosis'];*/

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la conexión del servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectarse con la base de datos");

$resultados=mysqli_query($conexion,"SELECT * FROM datos_vacunados where cedula='$cedula'") or die ("error al buscar en la base de datos");
while ($resultado=mysqli_fetch_array($resultados)) {
    echo $resultado['cedula']."       ".$resultado['nombre'];
}


?>

