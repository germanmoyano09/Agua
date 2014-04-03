 <?php 
	include("datosaccesodb.php");
	$conexion = mysqli_connect($host, $usuario, $clave, $db);
	if (mysqli_connect_errno()) {
		echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
		die();
	}
	mysqli_query($conexion, "SET NAMES 'utf8'");

	$sql = 	"INSERT INTO registro (nombre,apellido,correo,telefono) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['correo']."','".$_POST['telefono']."')";
	$res = mysqli_query($conexion, $sql);

?>
<script type="text/javascript">
	window.location="../suscripcion.php?ok=ok";
</script>
