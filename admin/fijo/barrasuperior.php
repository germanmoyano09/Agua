<!-- BEGIN HEADER -->   
<div class="header navbar navbar-inverse navbar-fixed-top">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="header-inner">
	 <!-- BEGIN LOGO -->  
	 <a class="navbar-brand" href="index.php">
	 <img src="assets/img/logo.png" alt="logo" class="img-responsive" />
	 </a>
	 <!-- END LOGO -->
	 <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
	 <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	 <img src="assets/img/menu-toggler.png" alt="" />
	 </a> 
	 <!-- END RESPONSIVE MENU TOGGLER -->
	 <!-- BEGIN TOP NAVIGATION MENU -->
	 <ul class="nav navbar-nav pull-right">		
		<!-- BEGIN USER LOGIN DROPDOWN -->
		<li class="dropdown user">
		   <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
		   <span class="username"><?php echo $_SESSION['usuario']; ?></span>
		   <i class="icon-angle-down"></i>
		   </a>
		   <ul class="dropdown-menu">
			  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Pantalla Completa</a>
			  </li>
			  <li><a href="logout.php"><i class="icon-key"></i> Salir</a>
			  </li>
		   </ul>
		</li>
		<!-- END USER LOGIN DROPDOWN -->
	 </ul>
	 <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->