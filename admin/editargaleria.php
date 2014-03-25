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

<?php $titulo="Galeria"; ?>

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
                  Galería de Fotos
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.php">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="galeria.php">Galeria</a>
                     <i class="icon-angle-right"></i>
			      </li>
				  <li>
                     <a href="#">Editar Foto</a>
                     <i class="icon-angle-right"></i>				  
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- TABLA EDITABLE-->
               <div class="portlet box red">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-list-alt"></i>Fotos</div>
                  </div>
                  <div class="portlet-body">
					 
					  <!-- BEGIN FORM-->
						  <form action="actualizargaleria.php" id="editar_galeria" class="form-horizontal">
						  <div class="modal-body">
								<div class="form-body">
								   <div class="alert alert-danger display-hide">
									  <button class="close" data-dismiss="alert"></button>
									  Se encontraron algunos errores. Compruebe los campos marcados.
								   </div>
								   <div class="alert alert-success display-hide">
									  <button class="close" data-dismiss="alert"></button>
									  Foto Modificada!
								   </div>
								   <div class="form-group">
									  <label class="control-label col-md-4">Nombre<span class="required">* </span></label>
									  <div class="col-md-8">
										<?php 
											$sql    = "SELECT nombre, imagen, posicion, version FROM galeria WHERE id = '".$_GET['id']."'";
											$result = mysqli_query($conexion, $sql);
											$error  = "";
											if($result){
												while ($galeria=mysqli_fetch_array($result)){
												?>
												<input type="text" name="nombre" data-required="1" class="form-control" value="<?php echo $galeria['nombre']; ?>"/>
												<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
												<input type="hidden" name="version" value="<?php echo $galeria['version']; ?>"/>
									  </div>
								   </div>
								   
								 						   
								    <div class="form-group">
									  <label class="control-label col-md-4">Posición<span class="required">* </span></label>
									  <div class="col-md-8">
											<input type="text" name="posicion" data-required="1" class="form-control" value="<?php echo $galeria['posicion']; ?>"/>
									 </div>
								   </div>
								   
								   <div class="form-group">
									  <label class="control-label col-md-4">Imágen de Portada <span class="required">*</span></label>
									  <div class="col-md-8">
										 <div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="width: 300px; height: 200px;">
											   <img src="../img/inicio/galeria/<?php echo $galeria['imagen']; ?>" alt="" />
																						
											<?php 
												}
											}else{
												$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
											}
											?>
											
											</div>
											<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 200px; line-height: 20px;">
											</div>
											<div id="contenedor_imagen_upload">
											   <span class="btn default btn-file">
											   <span class="fileupload-new"><i class="icon-paper-clip"></i> Seleccione una imágen</span>
											   <span class="fileupload-exists"><i class="icon-undo"></i> Cambiar</span>
											   <input type="file" id="imagen" class="default" name="imagen"/>
											   </span>
											   <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Eliminar</a>
											</div>
										 </div>
									  </div>
								   </div>
								   <div class="form-group">
									  <label class="col-md-3"> </label>
									  <div class="col-md-8">
										<img id="ajaxloader" style="display:none;" src="assets/loaders/loader.gif"/>
									  </div>
								   </div>
								</div>
						  </div>
						  <div class="modal-footer">
							 <a href="galeria.php" type="button" class="btn default">Volver</a>
							 <button type="submit" class="btn blue" id="btn_enviar">Guardar</button>
						  </div>
						  </form>
						  <!-- END FORM-->
					 
					 
                  </div>
				  

				  <script type="text/javascript">
					function enviarFormGaleria(){
					  $('#ajaxloader').show();
					  $('#btn_enviar').addClass('disabled');
					
					  var archivos = document.getElementById("imagen");//Damos el valor del input tipo file
					  var archivo = archivos.files; //Obtenemos el valor del input (los arcchivos) en modo de arreglo

					  //El objeto FormData nos permite crear un formulario pasandole clave/valor para poder enviarlo, este tipo de objeto ya tiene la propiedad multipart/form-data para poder subir archivos
					  var datosForm = new FormData();
					  
					  //Cargamos el nombre elegido
					  datosForm.append('nombre',$("#editar_galeria input[name=nombre]").val());
					  datosForm.append('id',$("#editar_galeria input[name=id]").val());
					  datosForm.append('version',$("#editar_galeria input[name=version]").val());
					  datosForm.append('posicion',$("#editar_galeria input[name=posicion]").val());

					  //Como no sabemos cuantos archivos subira el usuario, iteramos la variable y al
					  //objeto de FormData con el metodo "append" le pasamos calve/valor, usamos el indice "i" para
					  //que no se repita, si no lo usamos solo tendra el valor de la ultima iteracion
					  /*
					  for(i=0; i<archivo.length; i++){
						datosForm.append('archivo'+i,archivo[i]);
					  }
					  */
					  
					  //Como solo será un archivo el seleccionado por el usuario
					  datosForm.append('archivo',archivo[0]);
					  
					  $.ajax({
						url:'actualizargaleria.php', //Url a donde la enviaremos
						type:'POST', //Metodo que usaremos
						contentType:false, //Debe estar en false para que pase el objeto sin procesar
						data:datosForm, //Le pasamos el objeto que creamos con los archivos
						processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
						cache:false //Para que el formulario no guarde cache
					  }).done(function(msg){
						if(msg==0){
							$('#ajaxloader').hide();
							$('#btn_enviar').removeClass('disabled');
							$('.alert-success', $('#editar_galeria')).show();//Muestra mensaje de lugar agregado
							alert('Foto Modificada.');
							//alert(msg); //Mostrara lo devuelto por el archivo php
							location.href="galeria.php";
						}else{
							$('#ajaxloader').hide();
							$('#btn_enviar').removeClass('disabled');
							alert(msg); //Mostrara lo devuelto por el archivo php
						}
					  });
					}
				  </script>
               </div>
               <!-- FIN TABLA EDITABLE-->
            </div>
         </div>
         <!-- END PAGE CONTENT-->
      </div>
      <!-- BEGIN PAGE -->     
   </div>
   <!-- END CONTAINER -->
   
   <?php include("fijo/footer.php"); ?>
   
   <!-- BEGIN JAVASCRIPTS -->
   <?php include("fijo/javascripts.php"); ?>
   
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
   
   <script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script>
   <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   <script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
   <script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
   <script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-validation-galeria-editar.js"></script>  
   <script src="assets/scripts/form-components.js"></script>        
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {       
         App.init();
         FormComponents.init();
         FormValidation.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
   
   
</body>
<!-- END BODY -->
</html>

<?php 
mysqli_close($conexion);
?>