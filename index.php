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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Water Energy </title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Your styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">

     <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
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
        <header class="slide">            
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
                                    <a href="#">INICIO</a>
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
            
            <!-- Slide -->           
            <div class="camera_wrap" id="slide">

                <!-- Item Slide 1 --> 
                <div  data-src="img/inicio/slides/1.jpg">
                    <div class="camera_caption fadeFromLeft">
                        <div class="container">
                            <div class="row-fluid">                                
                                <div class="span8">
                                    <h1 class="animated fadeInDown">Bienvenidos a <br><span>WATER ENERGY</span>.</h1>
                                    <p class="animated fadeInUp">Agua - Sonido - Energía - Toque</p>
                                </div>
                            </div>  
                        </div>                                                                                         
                    </div>
                </div>
                <!-- End Item Slide 1-->  

                <!-- Item Slide 2 --> 
                <div  data-src="img/inicio/slides/2.jpg">
                </div>
                 <!-- End Item Slide 2 --> 

                 <!-- Item Slide 3--> 
                <div  data-src="img/inicio/slides/3.jpg">
                    <div class="camera_caption fadeFromLeft">
                        <div class="container">
                            <div class="row-fluid">                                
                                <div class="span8">
								    <h1 class="animated fadeInDown">Todos estamos aquí con un único objetivo: saber quiénes somos.</h1>
                                    <p class="animated fadeInUp"></p>
								</div>
                            </div>  
                        </div>                                                                                         
                    </div>
                </div>
                 <!-- End Item Slide 3 --> 

                 <!-- Item Slide 4 --> 
                <div  data-src="img/inicio/slides/4.jpg">
                </div>
                 <!-- End Item Slide 4 --> 

                  <!-- Item Slide 5 --> 
                <div  data-src="img/inicio/slides/5.jpg">
                    <div class="camera_caption fadeFromLeft">
                        <div class="container">
                            <div class="row-fluid">                                
                                <div class="span8">
                                    <h1 class="animated fadeInDown"></h1>
                                    <p class="animated fadeInUp">UNA VEZ QUE ALGO HA ESTADO UNIDO , ESTA SIEMPRE CONECTADO, A PESAR DE QUE LA UNION FÍSICA HAYA DEJADO DE EXISTIR.</p>
                                    
                                </div>
                            </div>  
                        </div>                                                                                         
                    </div>
                </div>
                 <!-- End Item Slide 5 --> 
            </div>    
        </header>
        <!-- End Header-->

        <!-- End content info -->
        <section class="content_info">
            
            <!-- Info title-->
            <div class="row-fluid info_title top_animationa">
                <div class="vertical_line">
                    <div class="circle_top"></div>
                </div>
                <div class="info_vertical">
					<p>El agua es el elemento clave de esta nueva era .Crear un viaje</p>
					<p>interior con movimientos lentos, toques sutiles y vibración.</p>
					<h1> <span>Bienvenidos - Water Energy </span></h1>
                </div>
                <div class="vertical_line"></div>
				
				<i class="icon-tint right"></i>
               
            </div>
            <!-- End Info title-->
            

            <!-- Galeria de Fotos-->
            <div class="info_resalt borders">
                <div class="container">
                    <div class="row-fluid">
                        <!-- flexslider-->
                         <div class="flexslider top_animationb" id="gallery">                            
                            <ul class="slides gallery">
								
								<?php 
									$sql = "SELECT nombre,imagen,posicion FROM galeria ORDER BY posicion ASC";
									$consulta = mysqli_query($conexion, $sql);
									$error = "";
									if ($consulta){
										while ($galeria=mysqli_fetch_array($consulta)){
								?>
											<li>
												<div class="hover">
													<img src="img/inicio/galeria/<?php echo $galeria['imagen']; ?>" alt="Image"/>                               
													<a href="img/inicio/galeria/<?php echo $galeria['imagen']; ?>" class="fancybox" title="<?php echo $galeria['nombre']; ?>"><div class="overlay"></div></a>
												</div>                                   
											</li>
								<?php 
										}
									}else{
										$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
									}
								?>	
							</ul>                            
                        </div>
                        <!--End flexsilider-->                      
                    </div>
                </div>
            </div>
            <!-- End Galeria de Fotos-->

    
			<!-- Info title-->
            <div class="row-fluid info_title top_animationf">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="info_vertical">
                    <p>
						Señor,Hazme un instrumento de tu paz:allí donde haya odio, que yo ponga el amor,allí donde haya ofensa, que yo ponga el perdón;allí donde haya discordia, que yo ponga la unión;
						allí donde haya error, que yo ponga la verdad;allí donde haya duda, que yo ponga la fe;allí donde haya desesperación, que yo ponga la esperanza;allí donde haya tinieblas, que yo ponga la luz;
						allí donde haya tristeza, que yo ponga alegría.Porque:dando es como se recibe,olvidándose de sí es como uno se encuentra,perdonando es como se recibe el perdón,
						y muriendo es como se resucita a la Vida.Francisco de Asís
					</p>
                </div>
                <div class="vertical_line"></div>

                <i class="icon-comment left"></i>
            </div>
            <!-- End Info title-->


            <!-- testimonials-->
            <section class="info_resalt border_top">
                <div class="comments_carousel top_animationg" id="comments_carousel">                
                    <ul class="slides">
                        
                        <li>
                            <div class="image">
                                <img src="img/inicio/commnets/1.jpg" alt="Image">                        
                            </div>
                            <div class="arrow_coment"></div>
                            <div class="name">
                                <h3>Bruce Lipton</h3>
                             </div>                    
                            <div class="job">
                                <h3>Biólogo</h3>
                            </div>
                            <p>"Lo que pensamos varía nuestra biología"</p>
                        </li>
						
                        <li>
                            <div class="image">
                                <img src="img/inicio/commnets/2.jpg" alt="Image">                        
                            </div>
                            <div class="arrow_coment"></div>
                            <div class="name">
                                <h3>Buda</h3>
                            </div>                    
                            <div class="job">
                                <h3>Maestro Espiritual</h3>
                            </div>
                            <p>El mejor servicio que puede hacerse a los demás es la liberación de uno mismo.</p>
                        </li>
						
						<li>
                            <div class="image">
                                <img src="img/inicio/commnets/3.jpg" alt="Image">                        
                            </div>
                            <div class="arrow_coment"></div>
                            <div class="name">
                                <h3>Sor Juana De La Cruz</h3>
                            </div>                    
                            <div class="job">
                                <h3>Religiosa católica, poeta y dramaturga</h3>
                            </div>
                            <p>Perfeccionad vos la obra con nuestro amor infinito, para que el fin de su vida no desdiga del principio.</p>
                        </li>
						
						
						<li>
                            <div class="image">
                                <img src="img/inicio/commnets/4.jpg" alt="Image">                        
                            </div>
                            <div class="arrow_coment"></div>
                            <div class="name">
                                <h3>Rumi</h3>
                            </div>                    
                            <div class="job">
                                <h3>Poeta místico musulmán</h3>
                            </div>
                            <p>El corazón del hombre es un instrumento musical, contiene una música grandiosa. Dormida, pero está allí, esperando el momento apropiado para ser interpretada, expresada, cantada, danzada. Y es a través del amor que el momento llega.</p>
                        </li>
						
						<li>
                            <div class="image">
                                <img src="img/inicio/commnets/5.jpg" alt="Image">                        
                            </div>
                            <div class="arrow_coment"></div>
                            <div class="name">
                                <h3>Mahatma Gandhi</h3>
                            </div>                    
                            <div class="job">
                                <h3>Abogado, pensador y político hindú</h3>
                            </div>
                            <p>Debemos ser la expresión del cambio que queremos ver en el mundo.</p>
                        </li>
						
						<li>
                            <div class="image">
                                <img src="img/inicio/commnets/6.jpg" alt="Image">                        
                            </div>
                            <div class="arrow_coment"></div>
                            <div class="name">
                                <h3>Gregg Braden</h3>
                            </div>                    
                            <div class="job">
                                <h3>Investigador</h3>
                            </div>
                            <p>El acto de centrar nuestra conciencia es un acto de creación.¡La conciencia es creadora!</p>
                        </li>
						
						<li>
                            <div class="image">
                                <img src="img/inicio/commnets/7.jpg" alt="Image">                        
                            </div>
                            <div class="arrow_coment"></div>
                            <div class="name">
                                <h3>Barbara Ann Brennan</h3>
                            </div>                    
                            <div class="job">
                                <h3>Sanadora, terapeuta y científica</h3>
                            </div>
                            <p>“El poder está dentro de ti"</p>
                        </li>
						
					</ul>    
                </div>  
            </section>  
            <!-- End testimonials--> 

			<!-- Info title-->
            <div class="row-fluid info_title top_animationf">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="info_vertical">
                    <p>
						Los trabajadores de la luz son aquellas personas que antes de nacer se ofrecieron voluntarias para ayudar al planeta y a sus habitantes sanar de los efectos provocados por el temor.
						Eres trabajador de la luz si te identificas con las siguientes afirmaciones:
						<br>• Sientes la vocación de sanar a otras personas.
						<br>• Deseas resolver los problemas sociales y medioambientales del mundo.
						<br>• Estas convencido de que los métodos espirituales son capaces de sanar cualquier situación problemática.
						<br>• Has vivido experiencias místicas; posibles que hayas tenido premoniciones psíquicas o encuentros angélicos, por ejemplo.
						<br>• Has sufrido experiencias muy duras en la vida que han erosionado tu conocimiento de que posees perfección divina.
						<br>• Deseas sanar tu propia vida pues consideras que es el primer paso para poder sanar al mundo.
						<br>• Sientes un fuerte impulso de escribir, enseñar o realizar un trabajo de asesoramiento relacionado con tus experiencias sanadoras.
						<br>• Eres consciente de que estas en este mundo para cumplir un propósito superior, aunque no estés seguro de cual es ni de cómo llevarlo a la práctica.
						<br>Doreen Virtue
					</p>
                </div>
                <div class="vertical_line"></div>

                <i class="icon-comment right"></i>
            </div>
            <!-- End Info title-->
			
			
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