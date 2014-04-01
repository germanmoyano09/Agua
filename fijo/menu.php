<!-- Menu-->
	<ul id="menu" class="sf-menu" style="width: 1000px;">
		<li>
			<?php
				if($titulo=== "index"){
					echo '<a class="sel" href="#">INICIO</a>';
				}else{
					echo '<a href="index.php">INICIO</a>';
				}
			?>
		</li>
		
		<li>
			<?php
				if($titulo === "informacion"){
					echo '<a class="sel" href="#">INFORMACIÓN</a>';
				}else{
					echo '<a href="informacion.php">INFORMACIÓN</a>';
				}
			?>
		</li>
		
		<li>
			<?php
				if($titulo === "terapia"){
					echo '<a class="sel" href="#">TERAPIAS</a>';
				}else{
					echo '<a href="#">TERAPIAS</a>';
				}
			?>
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
			<?php
				if($titulo === "suscripcion"){
					echo '<a class="sel" href="#">SUSCRIPCIÓN</a>';
				}else{
					echo '<a href="suscripcion.php">SUSCRIPCIÓN</a>';
				}
			?>
		</li>
		
		<li>
			<?php
				if($titulo === "cursos"){
					echo '<a class="sel" href="#">CURSOS</a>';
				}else{
					echo '<a href="cursos.php">CURSOS</a>';
				}
			?>
		</li>							
		
		<li>
			<?php
				if($titulo === "eventos"){
					echo '<a class="sel" href="#">EVENTOS</a>';
				}else{
					echo '<a href="eventos.php">EVENTOS</a>';
				}
			?>
		</li>
		
		<li>
			<?php
				if($titulo === "links"){
					echo '<a class="sel" href="#">LINKS</a>';
				}else{
					echo '<a href="links.php">LINKS</a>';
				}
			?>
		</li>
				
		<li>
			<?php
				if($titulo === "contacto"){
					echo '<a class="sel" href="#">CONTACTO</a>';
				}else{
					echo '<a href="contacto.php">CONTACTO</a>';
				}
			?>
		</li>
	</ul>
<!-- End Menu-->