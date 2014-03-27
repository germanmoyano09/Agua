<?php include("fijo/controlsesion.php"); ?>

<?php 
//Conectamos con la DB

include("fijo/datosaccesodb.php");
$conexion = mysqli_connect($host, $usuario, $clave, $db);
if (mysqli_connect_errno()) {
	echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
	die();
}
mysqli_query($conexion, "SET NAMES 'utf8'");
?>

<?php $titulo="Inicio"; ?>

<?php include("fijo/head.php"); ?>

<!-- BEGIN BODY -->
<body class="page-header-fixed">

   <?php include("fijo/barrasuperior.php"); ?>
   
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
   
      <?php include("fijo/menu.php"); ?>
	  
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Inicio
			
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.php">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat darkblue">
                  <div class="visual">
                     <i class="icon-list-alt"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					    <?php 
							$sql = "SELECT * FROM slider";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
						?>
					 </div>
                     <div class="desc">Sliders</div>
                  </div>
                  <a class="more" href="slider.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat red">
                  <div class="visual">
                     <i class="icon-camera"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					    <?php 
							$sql = "SELECT * FROM galeria";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
						?>
                     </div>
                     <div class="desc">                           
                        Galería Inicio 
                     </div>
                  </div>
                  <a class="more" href="galeria.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat green">
                  <div class="visual">
                     <i class="icon-calendar"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					 0
						<?php
						/*						
							$sql = "SELECT * FROM beneficio";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
						*/	
						?>
					 </div>
                     <div class="desc">Eventos</div>
                  </div>
                  <a class="more" href="beneficios.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat purple">
                  <div class="visual">
                     <i class="icon-external-link"></i>
                  </div>
                  <div class="details">
                     <div class="number">
                        <?php 
							$sql = "SELECT * FROM link";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
						?>
                     </div>
                     <div class="desc">                           
                        Links
                     </div>
                  </div>
                  <a class="more" href="link.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat yellow">
                  <div class="visual">
                     <i class="icon-group"></i>
                  </div>
                  <div class="details">
                     <div class="number">
						<?php 
							$sql = "SELECT * FROM registro";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
						?>
					 </div>
                     <div class="desc">Registrados</div>
                  </div>
                  <a class="more" href="registro.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
			
			<!-- ------------------------------------------------------------------- -->
			
			<!--
			
		 	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat brown">
                  <div class="visual">
                     <i class="icon-dollar"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					 0
						  	<?php 
							
								/*
								$sql = "SELECT * FROM sponsor";
								$result = mysqli_query($conexion, $sql);
							    $row_cnt = mysqli_num_rows($result);
							    printf($row_cnt);
								*/
							?>
                     </div>
                     <div class="desc">                           
                        Sponsors
                     </div>
                  </div>
                  <a class="more" href="sponsors.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
		 
		 
		 	
            
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat blue">
                  <div class="visual">
                     <i class="icon-picture"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					 0
                        <?php 
						/*
							$sql = "SELECT * FROM lugar";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
						*/
						?>
                     </div>
                     <div class="desc">                           
                        Lugares
                     </div>
                  </div>
                  <a class="more" href="lugares.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
			
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat orange">
                  <div class="visual">
                     <i class="icon-folder-close"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					 0
                        <?php 
						/*
							$sql = "SELECT * FROM categoria";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
							*/
						?>
                     </div>
                     <div class="desc">                           
                        Categorías 
                     </div>
                  </div>
                  <a class="more" href="categorias.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
            
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat brown">
                  <div class="visual">
                     <i class="icon-group"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					 0
						<?php 
						/*
							$sql = "SELECT * FROM socio";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
							*/
						?>
					 </div>
                     <div class="desc">Socios</div>
                  </div>
                  <a class="more" href="socio.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               <div class="dashboard-stat pink">
                  <div class="visual">
                     <i class="icon-user"></i>
                  </div>
                  <div class="details">
                     <div class="number">
					 0
						<?php 
						/*
							$sql = "SELECT * FROM sociovip";
							$result = mysqli_query($conexion, $sql);
							$row_cnt = mysqli_num_rows($result);
							printf($row_cnt);
							*/
						?>
					 </div>
                     <div class="desc">Socios VIP</div>
                  </div>
                  <a class="more" href="sociovip.php">
                  Administrar <i class="m-icon-swapright m-icon-white"></i>
                  </a>                 
               </div>
            </div>			
		
		-->
			
         </div>
         <!-- END PAGE CONTENT-->
      </div>
      <!-- BEGIN PAGE -->     
   </div>
   <!-- END CONTAINER -->
   
   <?php include("fijo/footer.php"); ?>
   
   <!-- BEGIN JAVASCRIPTS -->
   <?php include("fijo/javascripts.php"); ?>
   
   <script src="assets/scripts/app.js"></script>      
   <script>
      jQuery(document).ready(function() {    
         App.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
   
   
</body>
<!-- END BODY -->
</html>