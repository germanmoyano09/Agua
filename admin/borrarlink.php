<?php include("fijo/controlsesion.php"); ?><?php //Conectamos con la DBinclude("fijo/datosaccesodb.php");$conexion = mysqli_connect($host, $usuario, $clave, $db);if (mysqli_connect_errno()) {	echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";	die();}mysqli_query($conexion, "SET NAMES 'utf8'");$sql = "DELETE FROM link WHERE id=".$_POST['id'];if (!mysqli_query($conexion, $sql)){	echo "Fallo al intentar borrar lugar: (" . mysqli_connect_errno() . ")";	die();}echo 0;mysqli_close($conexion);?>