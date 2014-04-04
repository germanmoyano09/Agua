<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
	<title> Water Energy - Contacto </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Germán Moyano">
	<meta name="description" content="Para mayor información sobre terapias, talleres o eventos, escribe tu consulta." />	
	<meta name="keywords" content="water, energy, agua, energia, toques, vibraciones, terapias, informacion, jahara, watsu, aquarelax, craneosacral, EXPERIENCIA GONG, gong, CUENCOS, monochord, AI CHI, cursos, eventos, maipu, mendoza, argentina, " />
	<meta name="robots" content="index, follow, noarchive" />
	<meta name="googlebot" content="index, follow" />
    
    <!-- Your styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">

	<!-- Google Analytics -->
	<?php include_once("php/analyticstracking.php") ?>
	
     <!-- Favicons -->
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
									$titulo="contacto";
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
                        <h1>Contacto</h1>
                    </div>
                    <div class="span7">                        
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
                    <li>Contacto</li>                                       
                </ul>
            </div>        
        </div>
        <!-- End crumbs-->

        <!-- End content info -->
        <section class="content_info">
            
            <!-- Info title-->
            <div class="container padding">
                <div class="row-fluid animated fadeInUp delay2">
					
					<div class="span4">
						<div class="row-fluid">
							<img src="img/contacto/1.jpg" alt="Image">
						</div>
					</div>
						
					<div class="span4">
						<div class="row-fluid">
							<h2>Consultorio</h2>
							<p class="lead"> Ozamis 574
							<br>Maipu, Mendoza 5515<br>
							Cel: +54 2612 400 952<br>
							Email: <a href="mailto:javier.water.energy@gmail.com">javier.water.energy@gmail.com</a><br>
							</p>
						</div>
					</div>
				   
					<div class="span4">
						<div class="row-fluid">
							<img src="img/contacto/2.jpg" alt="Image">
						</div>
					</div>
				
				</div>
            </div>
            <!-- End Info title-->

            <!-- Info resalt-->
            <div class="info_resalt border_top">
                <div class="container">
					<div class="row-fluid">
						<div class="span6">
							<div id="resultado">
								<?php
									if (isset($_GET['ok'])){
										echo "¡Gracias por tu mensaje! Nos pondremos en contacto lo antes posible.";
									}
								?>
							</div>
                            
							<h3>Formulario de Contacto</h3>
							<form id="form1" action="php/contacto.php" method="POST"> 
                                <input type="text" placeholder="Nombre Completo" name="nombre" required>
                                <input type="email" placeholder="Correo"  name="correo" required>
                                <input type="text" placeholder="Teléfono"  name="telefono" required>
                                <textarea placeholder="Mensaje" name="mensaje" required></textarea>
                                <input type="submit" name="Submit" value="Enviar Mensaje" class="button">
                            </form> 
                            <div id="result"></div>  
                        </div>

                        <div class="span6">
                            <h3>Contáctenos</h3>
                            <p class="lead">
								Para mayor información sobre terapias, talleres o eventos, escribe tu consulta.
							</p>
                            
                            <!-- Map area-->
                            <section class="map_area">
                               <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Ozamis+574++Maipu,+Mendoza&amp;aq=&amp;sll=-32.978752,-68.789393&amp;sspn=0.01053,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Ozamis+JA+574,+Maip%C3%BA,+Mendoza&amp;ll=-32.978752,-68.789392&amp;spn=0.01053,0.021136&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://www.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Ozamis+574++Maipu,+Mendoza&amp;aq=&amp;sll=-32.978752,-68.789393&amp;sspn=0.01053,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=Ozamis+JA+574,+Maip%C3%BA,+Mendoza&amp;ll=-32.978752,-68.789392&amp;spn=0.01053,0.021136&amp;t=m&amp;z=14" target="_blank" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
                            </section>
                            <!-- End Map area-->
                        </div>

                    </div>
                   
                </div>
            </div>
            <!-- End Info resalt-->

        </section>
        <!-- End content info-->

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