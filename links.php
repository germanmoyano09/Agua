<!DOCTYPE html>

<?php 
	include("php/datosaccesodb.php");
	$conexion = mysqli_connect($host, $usuario, $clave, $db);
	if (mysqli_connect_errno()) {
		echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
		die();
	}
	mysqli_query($conexion, "SET NAMES 'utf8'");
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Water Energy - Links</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Germán Moyano">
	<meta name="description" content="Links de páginas recomendadas" />	
	<meta name="keywords" content="water, energy, agua, energia, toques, vibraciones, terapias, informacion, jahara, watsu, aquarelax, craneosacral, EXPERIENCIA GONG, gong, CUENCOS, monochord, AI CHI, cursos, eventos, maipu, mendoza, argentina, " />
	<meta name="robots" content="index, follow, noarchive" />
	<meta name="googlebot" content="index, follow" />
    
    <!-- Your styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49717815-1', 'water-energy.com.ar');
	  ga('send', 'pageview');

	</script>
	
     <!-- Favicons  -->
    <link rel="shortcut icon" href="img/icons/we_favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- styles for IE -->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie/ie.css" type="text/css" media="screen" />
    <![endif]-->
   
  </head>
  <body> 
        <!-- Header-->
        <header class="section_title">            
            <!-- nav_logo-->
            <div class="nav_logo animated fadeInDown delay1">            
                <div class="container">
                    <div class="row-fluid">

                        <!-- Logo-->
                        <div class="span3 logo">
                            <a href="index.php" title="Back to Home">                            
                              <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <!-- End Logo-->
                                                      
                        <!-- Nav-->
                        <nav class="span9">
                            <!-- Menu-->
								<?php
									$titulo="links";
									include("fijo/menu.php"); 
								?>
                            <!-- End Menu-->
                        </nav>
                        <!-- End Nav-->
                                                 
                    </div>
                </div>
            </div>
            <!-- End nav_logo-->

            <!-- Info section Title-->
            <div class="container">
                <div class="row-fluid animated fadeInUp delay1">
                    <div class="span5">
                        <h1>Links</h1>
                    </div>
					<div class="span7">                        
                        <p>Puede hacer click sobre cualquiera de los siguientes links y será redirigido a esa página en una nueva pestaña.</p>
                    </div>
                </div>
            </div>            
            <!-- End Info section Title--> 

        </header>
        <!-- End Header-->

        <!-- crumbs-->
        <div class="crumbs border_bottom">
            <div class="container">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li>/</li>
                    <li>Links</li>
                </ul>
            </div>        
        </div>
        <!-- End crumbs-->

        <!-- End content info -->
       
	   <!-- Links-->
		<div class="row-fluid animated fadeInUp delay2">
			<section class="content_info">
				<div class="row-fluid">
					<div class="info_vertical">
						<h2>Links de páginas recomendadas</h2>
					</div>					
					
                    <div class="span12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>
									</th>
									<th>
									   <!-- Nombre de la página -->
									</th>
									<th>
										<!-- URL -->
									</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$sql = "SELECT nombre,link FROM link ORDER BY id DESC";
									$consulta = mysqli_query($conexion, $sql);
									$error = "";
									if ($consulta){
										while ($link=mysqli_fetch_array($consulta)){
								?>
									<tr>
										<td>
										</td>
										<td>
											<?php echo $link['nombre']; ?>
										</td>
										<td>
											link: <a href="http://<?php echo $link['link']; ?>"  target="_blank"> <?php echo $link['link']; ?></a>
										</td>
									</tr>
								<?php 
										}
									}else{
										$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
									}
								?>		
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</div>	
		<!-- End Links-->
		
        <!-- footer-->
			<?php
				include("fijo/footer.php"); 
			?>
        <!-- End footer-->

   
        <!-- ======================= JQuery libs =========================== -->
        <!-- Always latest version of jQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>   
        <!-- jQuery local-->      
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <!-- jQuery ui-->    
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/superfish.js"></script>                                             
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="js/slide/camera.js" ></script>      
        <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>   
        <!--flexsilider-->
        <script type="text/javascript" src="js/carousel/jquery.flexslider.js"></script>    
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>  
        <!--Scrollama--> 
        <script type="text/javascript" src="js/scrollama/TweenMax.min.js"></script>
        <script type="text/javascript" src="js/scrollama/jquery.superscrollorama.js"></script>    
        <!--Gallery Grid--> 
        <script type="text/javascript" src="js/gallery/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="js/gallery/jquery.gridrotator.js"></script>     
        <!--Minislider Team-->         
        <script type="text/javascript" src="js/team/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="js/team/jquery.catslider.js"></script> 
        <!--Filters-->
        <script type="text/javascript" src="js/filters/filters.js" ></script>                            
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="js/jquery-func.js"></script>
        <!-- ======================= End JQuery libs =========================== -->


  </body>
</html>