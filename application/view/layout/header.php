<!DOCTYPE html>
<html lang="es">
	<head>
		<title>CHOHO</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- bootstrap-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>" rel="stylesheet">        
		<!-- bootstrap-->

		<!-- jquery UI-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/jquery-ui-1.12.1.custom/jquery-ui.css'); ?>" rel="stylesheet">
		<!-- fin-->
		  
		<!-- plantilla -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/componentes/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/componentes/Ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/dist/css/skins/skin-blue.min.css'); ?>" rel="stylesheet">
		<!-- fin -->
		
		<!-- jqGrid Bosttap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/Guriddo_jqGrid_JS_5.4.0-Trial/css/ui.jqgrid-bootstrap.css'); ?>" />
		<!-- fin -->

		<!-- ssi modal -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/libs/ssi-modal-master/dist/ssi-modal/styles/ssi-modal.css'); ?>" rel="stylesheet">
		<!-- fin --> 

		<style type="text/css">

			.skin-blue .main-header .navbar,.skin-blue .main-header .logo ,.skin-blue .main-header li.user-header,.skin-blue .main-header .logo:hover,.skin-blue .main-header .navbar .sidebar-toggle:hover {
			background: <?php echo BACKGROUND_DASHBOARD; ?> !important;
			}

			.clsHeader {
				background:  #008d4c; color: white;
			}

			.mayuscula {
				text-transform: uppercase !important;
			}

			.minuscula {
				text-transform: lowercase !important;
			}
				
			.clsRequerido {
				color: red;
			}

			.btn {
				margin: 2px 2px;
			}
			
			body .content {
				font-size: 11px !important;
				color: #73879C;
			}

			#imgLogo {
				border : none;
				border-radius : 20px 20px;
			}

			label {
				font-size : 11px !important;
				color :#73879C;
			}

			.tbl_titulo tr th {				
				text-align : center !important;
				vertical-align : middle !important;
				background: <?php echo BACKGROUND_TABLE; ?> !important;

				color : white !important;
				font-weight : bold;
				font-size : 11px;
				font-family : "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
			}

			.tbl_body {				
				color : black;
				font-size : 11px;
				font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
			}

			.form-control {
				height : 30px;
				font-size : 11px;
				/*padding: 6px 10px;*/
			}

			.textDerecha {
				text-align : right;
			}

			.textCenter {
				text-align : center;
			}
						
			.modal-dialog-center {
				margin-top : 20%;
			}
 
		</style>
	</head>

	<body class="skin-blue sidebar-mini sidebar-collapse">
		<div class="wrapper">
			<header class="main-header">
				<a href="<?php echo base_url('index.php?c=Autenticar&a=View')?>" class="logo">
					<span class="logo-mini"><i class="glyphicon_menu fa fa-home"></i></span>
				</a>

				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"><span class="sr-only">Toggle navigation</span></a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo base_url('public/img/avatar.png'); ?>" class="user-image" alt="User Image">
									<span class="hidden-xs">ADMIN</span>
								</a>

								<ul class="dropdown-menu">
									<li class="user-header">
										<img src="<?php echo base_url('public/img/avatar.png'); ?>" class="img-circle" alt="User Image">
										<p>USER ADMIN</p>
									</li>

									<li class="user-footer">
										<div class="pull-right">
											<a href="<?php echo base_url('index.php?c=Autenticar&a=Logout'); ?>" class="btn btn-default btn-flat">Cerrar Sesión</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>