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

<?php $titulo="Evento"; ?>

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
                  Eventos
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.php">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="#">Eventos</a>
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
                     <div class="caption"><i class="icon-calendar"></i>Eventos</div>
                  </div>
                  <div class="portlet-body">
                     <div class="table-toolbar">

						<div class="btn-group">
                           <a class="btn blue" data-toggle="modal" href="#evento">
                           Agregar Evento <i class="icon-plus"></i>
                           </a>
                        </div>
                     </div>
                     <table class="table table-striped table-bordered table-hover" id="tabla_evento">
                        <thead>
                           <tr>
                              <th>Nombre</th>
                              <th>Editar</th>
							  <th>Eliminar</th>
                           </tr>
                        </thead>
                        <tbody>
							<?php 
							$sql = "SELECT id, nombre, link FROM evento ORDER BY id DESC";
							$consulta = mysqli_query($conexion, $sql);
							$error = "";
							if ($consulta){
								while ($evento=mysqli_fetch_array($consulta)){
								?>
									<tr class="odd gradeX">
									  <td><?php echo $evento['nombre']; ?></td>
									  <td><a href="editarevento.php?id=<?php echo $evento['id'];?>">Editar</a></td>
									  <td><a id="borrarevento" evento-id="<?php echo $evento['id'];?>" href="#">Borrar</a></td>
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
				  
				  <!-- MODAL categoria -->
				  <div class="modal fade" id="evento" tabindex="-1" role="evento" aria-hidden="true">
					<div class="modal-dialog">
					   <div class="modal-content">
						  <div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							 <h4 class="modal-title">Agregar Evento</h4>
						  </div>
						  <!-- BEGIN FORM-->
						  <form action="#" id="agregar_evento" class="form-horizontal">
						  <div class="modal-body">
								<div class="form-body">
								   <div class="alert alert-danger display-hide">
									  <button class="close" data-dismiss="alert"></button>
									  Se encontraron algunos errores. Compruebe los campos marcados.
								   </div>
								   <div class="alert alert-success display-hide">
									  <button class="close" data-dismiss="alert"></button>
									  Evento Agregado!
								   </div>
								   <div class="form-group">
									  <label class="control-label col-md-4">Nombre<span class="required">* </span></label>
									  <div class="col-md-8">
										 <input type="text" name="nombreevento" data-required="1" class="form-control"/>
									  </div>
								   </div>
								   
								   <div class="form-group">
									  <label class="control-label col-md-4">Url<span class="required">* </span></label>
									  <div class="col-md-8">
										 <input type="text" name="urlevento" data-required="1" class="form-control"/>
									  </div>
								   </div>
								   
								   <div class="form-group">
									  <label class="col-md-3">&nbsp </label>
									  <div class="col-md-8">
										<img id="ajaxloader" style="display:none;" src="assets/loaders/loader.gif"/>
									  </div>
								   </div>
								   
								</div>
						  </div>
						  <div class="modal-footer">
							 <button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
							 <button type="submit" class="btn blue" id="btn_enviar">Agregar</button>
						  </div>
						  </form>
						  <!-- END FORM-->
					   </div>
					   <!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				  </div>
				  <!-- FIN MODAL categoria -->
				  <script type="text/javascript">
					function enviarFormEvento(){
					  $('#ajaxloader').show();
					  $('#btn_enviar').addClass('disabled');
					  
					  var datosForm = new FormData();
					 
					  datosForm.append('nombreevento',$("#agregar_evento input[name=nombreevento]").val());
					  datosForm.append('urlevento',$("#agregar_evento input[name=urlevento]").val());

					  $.ajax({
						url:'agregarevento.php', //Url a donde la enviaremos
						type:'POST', //Metodo que usaremos
						contentType:false, //Debe estar en false para que pase el objeto sin procesar
						data:datosForm, //Le pasamos el objeto que creamos con los archivos
						processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
						cache:false //Para que el formulario no guarde cache
					  }).done(function(msg){
						if(msg==0){
							$('#ajaxloader').hide();
							$('#btn_enviar').removeClass('disabled');
							$('.alert-success', $('#agregar_evento')).show();//Muestra mensaje de link agregado
							alert('Evento agregado.');
							$('#evento').modal('hide')
							location.reload();
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
   <script src="assets/scripts/tabla-evento.js"></script>
   <script src="assets/scripts/form-validation-evento.js"></script>  
   <script src="assets/scripts/form-components.js"></script>        
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TablaEvento.init();
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