<?php 
    session_start(); 
    //Conectamos con la DB
	
	include("fijo/datosaccesodb.php");
	$conexion = mysqli_connect($host, $usuario, $clave, $db);
	if (mysqli_connect_errno()) {
		echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
		die();
	}
	mysqli_query($conexion, "SET NAMES 'utf8'");
	
	
	if(isset($_POST['submit'])) { // comprobamos que se hayan enviado los datos del formulario 
        // comprobamos que los campos username y password no estén vacíos 
        if(empty($_POST['username']) || empty($_POST['password'])) { 
            header("Location: login.php?vacio");
			die();
        }else { 
            // simplificamos las variables
            $username = $_POST['username']; 
            $password = sha1($_POST['password']);
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD 
			
			/* Preparo la consulta */
			if($consulta = mysqli_prepare($conexion, "SELECT id, usuario FROM usuario WHERE usuario=? AND clave=?")) {

				/* Preparo los parametros "?" s - string, b - blob, i - int, etc */
				mysqli_stmt_bind_param($consulta, "ss", $username, $password);

				/* La ejecuto */
				mysqli_stmt_execute($consulta);

				/* Ligo resultados a variable */
				$usuariodevuelto = NULL;
				$iddevuelto = NULL;
				mysqli_stmt_bind_result($consulta, $iddevuelto, $usuariodevuelto);

				/* Obtengo el valor */
				mysqli_stmt_fetch($consulta);

				if (strcmp($usuariodevuelto,$username) != 0){
					header("Location: login.php?incorrecto"); //vuelve al login con una variable para mostrar error
					die();
				}
				if (strcmp($usuariodevuelto,$username) == 0){
					$_SESSION['idusuario'] = $iddevuelto; // creamos en la sesion la variable "idusuario" y le asignamos como valor el iddevuelto por la consulta
					$_SESSION['usuario'] = $usuariodevuelto; // creamos en la sesion la variable "usuario" y le asignamos como valor el usuariodevuelto por la consulta
					header("Location: index.php");
					die();
				}

				/* Cierro consulta */
				mysqli_stmt_close($consulta);
			}
        } 
    }else { //Si llegó hasta acá sin hacer click en el boton enviar lo redirige al login
        header("Location: login.php"); 
    } 
	
	mysqli_close($conexion);
?>