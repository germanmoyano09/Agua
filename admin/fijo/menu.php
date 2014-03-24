<!-- BEGIN SIDEBAR -->
  <div class="page-sidebar navbar-collapse collapse">
	 <!-- BEGIN SIDEBAR MENU -->        
	 <ul class="page-sidebar-menu">
		<li>
		   <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		   <div class="sidebar-toggler hidden-phone"></div>
		   <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		</li>
		<li class="start <?php if ($titulo=="Inicio") echo 'active';?>">
			<a href="index.php">
			<i class="icon-home"></i> 
			<span class="title">Inicio</span>
			</a>
		</li>
		
		<li class="<?php if ($titulo=="Sponsors") echo 'active';?>">
			<a href="sponsors.php">
			<i class="icon-dollar"></i> 
			<span class="title">Sponsors</span>
			</a>
		</li>
		
		<li class="<?php if ($titulo=="Flyers") echo 'active';?>">
			<a href="flyers.php">
			<i class="icon-list-alt"></i> 
			<span class="title">Flyers</span>
			</a>
		</li>
		
		<li class="<?php if ($titulo=="Lugares") echo 'active';?>">
			<a href="lugares.php">
			<i class="icon-picture"></i> 
			<span class="title">Lugares</span>
			</a>
		</li>
		
		<li class="<?php if ($titulo=="Fotos") echo 'active';?>">
			<a href="fotos.php">
			<i class="icon-camera"></i> 
			<span class="title">Albums</span>
			</a>
		</li>
		
		<li class="<?php if ($titulo=="Categoria") echo 'active';?>">
			<a href="categorias.php">
			<i class="icon-folder-close"></i> 
			<span class="title">Categorías</span>
			</a>
		</li>
		
		<li class="<?php if ($titulo=="Beneficios") echo 'active';?>">
			<a href="beneficios.php">
			<i class="icon-star-empty"></i> 
			<span class="title">Beneficios</span>
			</a>
		</li>

		<li class="<?php if ($titulo=="Musica") echo 'active';?>">
			<a href="musica.php">
			<i class="icon-music"></i> 
			<span class="title">Música</span>
			</a>
		</li>
		
		<li class="<?php if ($titulo=="Socio") echo 'active';?>">
			<a href="javascript:;">
			<i class="icon-user"></i> 
			<span class="title">Socios</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li class="<?php if ($subtitulo=="Sociovip") echo 'active';?>">
					<a href="sociovip.php">
					<i class="icon-user"></i>
					VIP</a>
				</li>
				<li class="<?php if ($subtitulo=="Socio") echo 'active';?>">
					<a href="socio.php">
					<i class="icon-user"></i>
					Simples Mortales</a>
				</li>
			</ul>
		</li>
		
		<li >
			<a href="../" target="_blank">
			<i class="icon-expand"></i> 
			<span class="title">Ver Web</span>
			</a>
		</li>
		
		<li >
			<a href="https://www.google.com/analytics/web/?hl=es#dashboard/Ktt6ZBqzT5q1P7OUUQBMCw/a45885065w76675559p79262989/" target="_blank">
			<i class="icon-bar-chart"></i> 
			<span class="title">Ver Estadísticas</span>
			</a>
		</li>
		
		<li class="last ">
			<a href="logout.php">
			<i class="icon-remove"></i> 
			<span class="title">Salir</span>
			</a>
		</li>
	 </ul>
	 <!-- END SIDEBAR MENU -->
  </div>
  <!-- END SIDEBAR -->