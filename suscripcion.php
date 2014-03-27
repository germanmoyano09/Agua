<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title> Water Energy - Suscripción </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Your styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">

     <!-- Favicons
    ================================================== -->
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
  
  <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
  
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
                            <ul id="menu" class="sf-menu">
                                <li>
                                    <a href="index.php">INICIO</a>
                                </li>
                                
								 <li>
                                    <a href="informacion.php">INFORMACIÓN</a>
                                </li>
								
								<li>
									<a href="#">TERAPIAS</a>
									<ul>                                  
										<li><a href="terapia_jahara_technique.php">JAHARA</a></li>
										<li><a href="terapia_watsu.php">WATSU</a></li>
										<li><a href="terapia_aquarelax.php">AQUARELAX</a></li>
										<li><a href="terapia_craneosacral.php">CRANEOSACRAL</a></li>
										<li><a href="terapia_experiencia_gong.php">EXPERIENCIA GONG</a></li>
										<li><a href="terapia_con_cuencos.php">TERAPIA CON CUENCOS</a></li>
										<li><a href="terapia_monochord.php">MONOCHORD</a></li>
										<li><a href="terapia_ai_chi.php">AI CHI</a></li>
										
										<!--
											<li><a href="single_post.php"></a></li>
										-->
									</ul>
								</li>
                                
								<li>
									<a href="#">SUSCRIPCIÓN</a>
								</li>
								
								<li>
									<a href="eventos.php">EVENTOS</a>
								</li>
								
								<li>
									<a href="links.php">LINKS</a>
								</li>
										
								<li>
									<a href="contacto.php">CONTACTO</a>
								</li>
                            </ul>
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
                        <h1>Suscripción</h1>
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
                    <li>Suscripción</li>                                       
                </ul>
            </div>        
        </div>
        <!-- End crumbs-->

        <!-- Info title-->
            <div class="container padding">
                <div class="row-fluid animated fadeInUp delay2">
                    <div class="span12">
                        <h3>Suscripción</h3>
					    <p> 
							Si te suscribes al Boletín de Noticas podrás estar informado puntualmente de todas las actividades que se realizarán a lo
							largo del año. Por favor, rellena todos los campos para poder brindarte un mejor servicio. Los campos con un asterisco (*)
							son obligatorios.
						</p>
						
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
									if ( isset( $_SERVER['HTTP_REFERER'] ) ) { 
										$refer = strtolower( $_SERVER['HTTP_REFERER'] ); 
										
										if($refer === 'http://localhost/agua/suscripcion.php')
											echo "¡Gracias por registrarte! A partir de ahora recibirás información de los próximos eventos. Para darte 
											de baja solo contesta un correo con asunto: baja y en el mensaje el motivo.";
									} 
								?>
							</div>
							<h3>Formulario de suscripción</h3>
                            <form id="form1" action="php/registro.php" METHOD="POST">
                                <input type="text" placeholder="Nombre *" name="nombre" required>
								<input type="text" placeholder="Apellido *" name="apellido" required>
                                <input type="email" placeholder="Correo *"  name="correo" required>
                                <input type="text" placeholder="Telefono *" name="telefono" required>
                                
                                <input type="submit" name="Submit" value="Send Message" class="button">
                            </form>

							
							
                        </div>

                        <div class="span6">
							<div class="fb-like-box" data-href="https://www.facebook.com/pages/Javier-Gonzalez-Water-Energy/168603496669439?fref=ts" data-width="500" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
						</div>

                    </div>
                   
                </div>
            </div>
            <!-- End Info resalt-->

			<!-- footer-->
        <footer class="coopring">
            <p>&copy; 2014 GM. All Rights Reserved.</p>
        </footer>        
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