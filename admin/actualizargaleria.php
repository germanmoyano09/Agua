<?php include("fijo/controlsesion.php"); ?><?php require_once('fijo/ImageManipulator.php'); ?><?php //Conectamos con la DBinclude("fijo/datosaccesodb.php");$conexion = mysqli_connect($host, $usuario, $clave, $db);if (mysqli_connect_errno()) {	echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";	die();}mysqli_query($conexion, "SET NAMES 'utf8'");$id= $_POST['id'];$nombregaleria= $_POST['nombre'];$posicion = $_POST['posicion'];$version = $_POST['version'];$ver = $version + 1;$sql= "UPDATE galeria SET nombre='".$nombregaleria."', version='".$ver."', posicion='".$posicion."' WHERE id='".$id."'";if (!mysqli_query($conexion, $sql)) {	echo "No se pudo modificar la foto: (" . mysqli_connect_errno() . ")";	die();}if (isset ($_FILES['archivo'])){ 	$ruta="../img/inicio/galeria/";	//Como no sabemos cuantos archivos van a llegar, iteramos la variable $_FILES	foreach ($_FILES as $imagen) {		if($imagen['error'] == UPLOAD_ERR_OK ){//Verificamos si se subio correctamente		  $pathinfo = pathinfo($imagen['name']);//Desglosamos el nombre del archivo (en nombre y extension)		  $ext = strtolower($pathinfo['extension']);//Obtenemos la extension del archivo original (en minuscula)		  $ext = ($ext == '') ? $ext : '.' . $ext;//Si tiene extensión le agregamos un punto delante		  if($ext != ".jpeg" AND $ext != ".jpg" AND $ext != ".png" AND $ext != ".gif"){			$sql = "DELETE imagen FROM galeria WHERE  id=".$id;			mysqli_query($conexion, $sql);			echo "El archivo subido solo puede ser jpeg, jpg, png o gif";			die();		  }		  $nombre = $id;//mysqli_insert_id($conexion);//El nombre del archivo será el ID del flyer		  $temporal = $imagen['tmp_name']; //Obtenemos el nombre del archivo temporal		  		  //Redimensionamos la imagen si hace falta					//Creamos un objeto para manipular el tamaño de la imagen			$manipulator = new ImageManipulator($temporal);			//Tomamos los datos de la imagen			$width  = $manipulator->getWidth(); //ancho			$height = $manipulator->getHeight(); //alto						$ancho_final = 600;			$alto_final = 400;						//Si no es del tamaño exacto, redimensionamos			if ($ancho_final!=$width OR $alto_final!=$height){							//CUando la relación aspecto es mayor o igual				if(($ancho_final/$alto_final) <= ($width/$height)){					//Redimencionamos en alto manteniendo proporcion del ancho					$ancho_proporcional = ($alto_final * $width) / $height;					$newImage = $manipulator->resample($ancho_proporcional, $alto_final);					//Preparamos el corte de desde la mitad del ancho de la imagen					$centreX = round($ancho_proporcional / 2); //centro eje y					$x1 = $centreX - ($ancho_final/2);					$x2 = $centreX + ($ancho_final/2);					$y1 = 0;					$y2 = $alto_final;					$newImage = $manipulator->crop($x1, $y1, $x2, $y2);				}				//CUando la relación aspecto es menor				if(($ancho_final/$alto_final) > ($width/$height)){					//Redimencionamos en ancho manteniendo proporcion del alto					$alto_proporcional = ($ancho_final / $width) * $height;					$newImage = $manipulator->resample($ancho_final, $alto_proporcional);					//Preparamos el corte de desde la mitad del alto de la imagen					$centreY = round($alto_proporcional / 2); //centro eje y					$x1 = 0;					$x2 = $ancho_final;					$y1 = $centreY - ($alto_final/2);					$y2 = $centreY + ($alto_final/2);					$newImage = $manipulator->crop($x1, $y1, $x2, $y2);				}			}			//Movemos el archivo redimensionado a la ruta especificada			$manipulator->save($ruta . $nombre . "-" . $ver . $ext);		  		  //move_uploaded_file($temporal, $ruta . $nombre . "-" . $ver . $ext); //Movemos el archivo temporal a la ruta especificada		  //Actualizamos el registro creado para colocar correctamente el nombre de la imagen subida.		  $sql = "UPDATE galeria SET imagen='".$nombre."-".$ver.$ext."' WHERE  id=".$id;		  if (!mysqli_query($conexion, $sql)) {			echo "No se pudo guardar el nombre de la imagen en la base de datos: (" . mysqli_connect_errno() . ")";			die();		  }		   echo 0;		}else{		  echo "No se pudo cargar imágen: ".$imagen['error']; //Si no se cargo mostramos el error		}	}}else{	echo 0;}mysqli_close($conexion);?>