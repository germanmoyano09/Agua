<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title> Water Energy - Contacto </title>
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
									<a href="suscripcion.php">SUSCRIPCIÓN</a>
								</li>
								
								<li>
									<a href="eventos.php">EVENTOS</a>
								</li>
								
								<li>
									<a href="links.php">LINKS</a>
								</li>
										
								<li>
									<a href="#">CONTACTO</a>
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
                        <h1>Contáctenos</h1>
                    </div>
                    <div class="span7">                        
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</p>
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
					
					<!--
					<div class="span4">
						<div class="row-fluid">
							<img src="img/contacto/1.jpg" alt="Image">
						</div>
					</div>
						
					<div class="span4">
						<div class="row-fluid">
							<h4>Consultorio</h4>
							<p> Ozamis no me acuerdo el numero
							<br>Maipu, Mendoza 5515<br>
							Tel: +54 261 000 123<br>
							Cel: +54 261 000 123<br>
							Email: <a href="mailto:jg@gmail.net">testmail@yourdomain.com</a><br>
							</p>
						</div>
					</div>
				   
					<div class="span4">
						<div class="row-fluid">
							<img src="img/contacto/1.jpg" alt="Image">
						</div>
					</div>
				   -->
				   
				   
				   <div class="span6">
                       <div class="row-fluid">
							<div class="span6">
								<img src="img/contacto/1.jpg" alt="Image">
							</div>
							<div class="span6">
								<h4>Consultorio</h4>
								<p> Ozamis no me acuerdo el numero
								<br>Maipu, Mendoza 5515<br>
								Tel: +54 261 000 123<br>
								Email: <a href="mailto:jg@gmail.net">testmail@yourdomain.com</a><br>
								</p>
							</div>
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
                            <h3>Formulario de Contacto</h3>
                            <form id="form" action="http://html.iwthemes.com/jekas/skin_two/send_mail.php">
                                <input type="text" placeholder="Nombre" name="Name" required>
                                <input type="email" placeholder="Correo"  name="Email" required>
                                <input type="number" placeholder="Teléfono"  name="Phone" required>
                                <textarea placeholder="Mensaje" name="message" required></textarea>
                                <input type="submit" name="Submit" value="Send Message" class="button">
                            </form> 
                            <div id="result"></div>  
                        </div>

                        <div class="span6">
                            <h3>Contactenos</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>
                            
                            <!-- Map area-->
                            <section class="map_area">
                                <iframe  src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=new+york&amp;aq=&amp;sll=40.396764,-3.713379&amp;sspn=9.61761,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=Nueva+York,+Estados+Unidos&amp;ll=40.614353,-74.005973&amp;spn=0.598524,1.234589&amp;t=m&amp;z=10&amp;output=embed">
                                </iframe>
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