<?php 
//include("fijo/controlsesion.php"); 
//Conectamos con la DB
//
include("fijo/datosaccesodb.php");
$conexion = mysqli_connect($host, $usuario, $clave, $db);
if (mysqli_connect_errno()) {
	echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
	die();
}
//mysqli_query($conexion, "SET NAMES 'utf8'");

$sql= "SELECT * FROM registro";

$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) > 0 ){
	
	date_default_timezone_set('America/Mendoza');

	//La siguiente línea determina si se está accediendo al archivo vía HTTP o CLI(command line interface), el archivo solo se va a mostrar si se accede desde un navegador web(HTTP).
	if (PHP_SAPI == 'cli')
		die('Este archivo solo se puede ver desde un navegador web');

	/** Se agrega la libreria PHPExcel */
	 require_once 'lib/PHPExcel/PHPExcel.php';
	 
	// Se crea el objeto PHPExcel
	 $objPHPExcel = new PHPExcel();	

	// Se asignan las propiedades del libro
	$objPHPExcel->getProperties()->setCreator("Water-Energy") // Nombre del autor
		->setLastModifiedBy("Water Energy") //Ultimo usuario que lo modificó
		->setTitle("Lista de Usuarios Registrados") // Titulo
		->setSubject("Registrados") //Asunto
		->setDescription("Lista de usuarios registados en water-energy.com.ar") //Descripción
		->setKeywords("lista registrados water energy") //Etiquetas
		->setCategory("Reporte excel"); //Categorias
		
	$tituloReporte = "Lista de Registrados Water-Energy";
	$titulosColumnas = array('NOMBRE', 'APELLIDO', 'CORREO', 'TELEFONO');

	// Se combinan las celdas A1 hasta D1, para colocar ahí el titulo del reporte
	$objPHPExcel->setActiveSheetIndex(0)
		->mergeCells('A1:D1');
	 
	// Se agregan los titulos del reporte
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A1', $tituloReporte) // Titulo del reporte
		->setCellValue('A3',  $titulosColumnas[0])  //Titulo de las columnas
		->setCellValue('B3',  $titulosColumnas[1])
		->setCellValue('C3',  $titulosColumnas[2])
		->setCellValue('D3',  $titulosColumnas[3]);	
		
	//Se agregan los datos de los registrados
	  $i = 4; //Numero de fila donde se va a comenzar a rellenar
	 while ($fila = mysqli_fetch_array($resultado)) {
		 $objPHPExcel->setActiveSheetIndex(0)
			 ->setCellValue('A'.$i, $fila['nombre'])
			 ->setCellValue('B'.$i, $fila['apellido'])
			 ->setCellValue('C'.$i, $fila['correo'])
			 ->setCellValue('D'.$i, $fila['telefono']);
		 $i++;
	 }
	 
	 
	 //ESTILOS DE LAS SELDAS
	 $estiloTituloReporte = array(
		'font' => array(
			'name'      => 'Verdana',
			'bold'      => true,
			'italic'    => false,
			'strike'    => false,
			'size' =>16,
			'color'     => array(
				'rgb' => 'FFFFFF'
			)
		),
		'fill' => array(
			'type'  => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array(
				'argb' => 'FF220835')
		),
		'borders' => array(
			'allborders' => array(
				'style' => PHPExcel_Style_Border::BORDER_NONE
			)
		),
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'rotation' => 0,
			'wrap' => TRUE
		)
	);
	 
	$estiloTituloColumnas = array(
		'font' => array(
			'name'  => 'Arial',
			'bold'  => true,
			'color' => array(
				'rgb' => '#000000'
			)
		),
		'fill' => array(
			'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
		'rotation'   => 90,
			'startcolor' => array(
				'rgb' => 'FFFFFF'
			),
			'endcolor' => array(
				'argb' => 'FFFFFF'
			)
		),
		'borders' => array(
			'top' => array(
				'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
				'color' => array(
					'rgb' => '143860'
				)
			),
			'bottom' => array(
				'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
				'color' => array(
					'rgb' => '143860'
				)
			)
		),
		'alignment' =>  array(
			'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'wrap'      => TRUE
		)
	);
	 
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
		'font' => array(
			'name'  => 'Arial',
			'color' => array(
				'rgb' => '000000'
			)
		),
		'fill' => array(
		'type'  => PHPExcel_Style_Fill::FILL_SOLID,
		'color' => array(
				'argb' => 'FFFFFF')
		),
		'borders' => array(
			'left' => array(
				'style' => PHPExcel_Style_Border::BORDER_THIN ,
			'color' => array(
					'rgb' => '3a2a47'
				)
			)
		)
	));
	//doy formato por arreglos
	$objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray($estiloTituloReporte);
	$objPHPExcel->getActiveSheet()->getStyle('A3:D3')->applyFromArray($estiloTituloColumnas);
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:D".($i-1));

	//asigno ancho automatico
	for($i = 'A'; $i <= 'D'; $i++){
		$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
	}

	// Se asigna el nombre a la hoja
	$objPHPExcel->getActiveSheet()->setTitle('Socios');
	 
	// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
	$objPHPExcel->setActiveSheetIndex(0);
	 
	// Inmovilizar paneles
	//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
	$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

	// Se manda el archivo al navegador web, con el nombre que se indica, en formato 2007
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="ListaderegistradosWE.xlsx"');
	header('Cache-Control: max-age=0');
	 
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	$objWriter->save('php://output');
	exit;
}else{
	print_r('No hay resultados para mostrar');
}
	
	
mysqli_close($conexion);
?>