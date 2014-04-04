<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Water Energy - Liberación Somato-Emocional</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
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
									$titulo="terapia";
									$subtitulo="lse";
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
                        <h1>Liberación Somato-Emocional</h1>
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
                    <li>Terapias</li>
                    <li>/</li>
                    <li>Liberación Somato-Emocional</li>                                       
                </ul>
            </div>        
        </div>
        <!-- End crumbs-->

        <!-- End content info -->
        <section class="content_info">
            
            <!-- Post-->
            <div class="row-fluid animated fadeInUp delay2">
                <div class="vertical_line">
                    <div class="circle_top"></div>
                </div>
                <div class="post">
                    <h2>Liberación Somato-Emocional</h2>
					<p>
						La Liberación Somato-Emocional es un proceso terapéutico que ayuda a liberar a la mente y al cuerpo de los efectos residuales de los traumas 
						pasados asociados a reacciones negativas. El Dr. John Upledger y el biofísico Dr. Zvi Karni descubrieron que el cuerpo a menudo retiene (en vez de disipar) 
						fuerzas físicas. Esto es el resultado de un accidente, daño o trauma emocional.
					</p>
					<p>
						Cómo funciona
					</p>
					<p>		
						Siguiendo el trauma, el cuerpo aísla el área en disfunción, creando lo que ha sido denominado como un "Quiste Energético". Aunque un cuerpo 
						razonablemente sano puede trabajar y adaptarse a un Quiste Energético, se requiere una energía extra para llevar a cabo las funciones corporales
						normales. Conforme pasan los años, el patrón adaptativo del cuerpo va perdiendo su efectividad: los síntomas y las disfunciones empiezan a aparecer, 
						siendo cada vez más difíciles de ignorar o suprimir. Un Quiste Energético puede encerrar en su interior una emoción. Nadie puede negar que las 
						emociones y los sentimientos nos afectan, no sólo mentalmente, sino también físicamente. Estos "quistes emocionales" alteran de igual manera a 
						nuestro cuerpo y puede que llegue un momento en el que nuestro mecanismo de adaptación y supervivencia no puede seguir soportando este esfuerzo 
						adicional y se pongan de manifiesto los síntomas físicos y/o emocionales. Mediante la Liberación Somato-Emocional y toda una serie de recursos 
						apropiados, el terapeuta ayuda al paciente a liberar esas emociones y recuerdos que le están provocando una "enfermedad".
					</p>

					<div class="vertical_line"></div> 
					<img src="img/terapias/lse.jpg" alt="Image" class="padding_top_mini">          
					
                </div>
                <div class="vertical_line"></div>                
            </div>
            <!-- End Post-->
	
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