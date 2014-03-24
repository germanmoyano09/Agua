<?php $titulo="Login"; ?>

<?php include("fijo/head.php"); ?>
<!-- BEGIN BODY -->
<body class="login">
   <!-- BEGIN LOGO -->
   <div class="logo">
      <!-- <img src="assets/img/logo-big.png" alt="" />  -->
   </div>
   <!-- END LOGO -->
   <!-- BEGIN LOGIN -->
   <div class="content">
      <!-- BEGIN LOGIN FORM -->
      <form class="login-form" action="loginsesion.php" method="post">
         <h3 class="form-title">Ingreso a Administración</h3>
         <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>Se debe ingresar un usuario y una contraseña.</span>
         </div>
		 <?php if(isset($_GET["vacio"])) { ?>
		 <div class="alert alert-error" style="display: block; color: #b94a48; background-color: #f2dede; border-color: #eed3d7;">
            <button class="close" data-dismiss="alert"></button>
            <span>Se debe ingresar un usuario y una contraseña.</span>
         </div>
		 <?php } ?>
		 <?php if(isset($_GET["incorrecto"])) { ?>
		 <div class="alert alert-error" style="display: block; color: #b94a48; background-color: #f2dede; border-color: #eed3d7;">
            <button class="close" data-dismiss="alert"></button>
            <span>Usuario y/o contraseña incorrectos.</span>
         </div>
		 <?php } ?>
         <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Usuario</label>
            <div class="input-icon">
               <i class="icon-user"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username"/>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <div class="input-icon">
               <i class="icon-lock"></i>
               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password"/>
            </div>
         </div>
         <div class="form-actions">
			<input type="hidden" name="submit" value="submit"/>
            <button type="submit" class="btn red pull-right">
            Ingresar <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
      </form>
      <!-- END LOGIN FORM -->        
   </div>
   <!-- END LOGIN -->
   <!-- BEGIN COPYRIGHT -->
   <div class="copyright">
      Desarrollado por <a style="color: #eee" href="mailto:c.germanmoyano@gmail.com">Germán Moyano</a>
   </div>
   <!-- END COPYRIGHT -->
   
   <!-- BEGIN JAVASCRIPTS -->
   <?php include("fijo/javascripts.php"); ?>
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
   <script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/login-soft.js" type="text/javascript"></script>      
   <!-- END PAGE LEVEL SCRIPTS --> 
   <script>
      jQuery(document).ready(function() {     
        App.init();
        Login.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>