<!DOCTYPE html>
<html lang="es">
	<head>
		<title>CHOHO</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- bootstrap-->
		<link href="<?php echo base_url('public/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css')?>" rel="stylesheet">        
		<!-- bootstrap-->
 
		<style type="text/css">
			/** Specific styles of signin component*/
			/** General styles*/
			body, html {
				height: 100%;                
				background: url("<?php echo base_url('public/img/HgflTDf.jpg')?>") 50% fixed;            
				background-repeat: no-repeat;        
				background-size: cover;
			}

			.card-container.card {
				max-width: 350px;
				padding: 40px 40px;
			}

			.btn {
				font-weight: 700;
				height: 36px;
				-moz-user-select: none;
				-webkit-user-select: none;
				user-select: none;
				cursor: default;
			}

			/*
			 * Card component
			 */
			.card {
				background-color: #F7F7F7;
				/* just in case there no content*/
				padding: 20px 25px 30px;
				margin: 0 auto 25px;
				margin-top: 50px;
				/* shadows and rounded borders */
				-moz-border-radius: 2px;
				-webkit-border-radius: 2px;
				border-radius: 2px;
				-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			}

			.profile-img-card {
				width: 96px;
				height: 96px;
				margin: 0 auto 10px;
				display: block;
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;
				border-radius: 50%;
			}

			/*
			 * Form styles
			 */
			.profile-name-card {
				font-size: 16px;
				font-weight: bold;
				text-align: center;
				margin: 10px 0 0;
				min-height: 1em;
			}

			.reauth-email {
				display: block;
				color: #404040;
				line-height: 2;
				margin-bottom: 10px;
				font-size: 14px;
				text-align: center;
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}

			.form-signin #inputEmail,
			.form-signin #inputPassword {
				direction: ltr;
				height: 44px;
				font-size: 16px;
			}

			.form-signin input[type=email],
			.form-signin input[type=password],
			.form-signin input[type=text],
			.form-signin button {
				width: 100%;
				display: block;
				margin-bottom: 10px;
				z-index: 1;
				position: relative;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}

			.form-signin .form-control:focus {
				border-color: rgb(104, 145, 162);
				outline: 0;
				-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
				box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
			}

			.btn.btn-signin {				
				background-color: rgb(104, 145, 162);				
				padding: 0px;
				font-weight: 700;
				font-size: 14px;
				height: 36px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				border-radius: 3px;
				border: none;
				-o-transition: all 0.218s;
				-moz-transition: all 0.218s;
				-webkit-transition: all 0.218s;
				transition: all 0.218s;
			}

			.btn.btn-signin:hover,
			.btn.btn-signin:active,
			.btn.btn-signin:focus {
				background-color: rgb(12, 97, 33);
			}

			.forgot-password {
				color: rgb(104, 145, 162);
			}

			.forgot-password:hover,
			.forgot-password:active,
			.forgot-password:focus{
				color: rgb(12, 97, 33);
			}
		</style>
	</head>
	<body>
		<?php
			$user = (isset($_COOKIE['usu']) ? $_COOKIE['usu'] : '');
			$password = (isset($_COOKIE['pass']) ? $_COOKIE['pass'] : '');
			$check = '';
		?>
		<div class="container">
			<div class="card card-container">
				<img  id="profile-img" class="profile-img-card"  src="<?php echo base_url('public/img/avatar.png'); ?>" />

				<p id="profile-name" class="profile-name-card"></p>
				<form action="index.php?c=Autenticar&a=login" method="POST" class="form-signin">
					<span id="reauth-email" class="reauth-email"></span>
					<input type="text" id="txtUsuario" name="txtUsuario" maxlength="15" class="form-control" placeholder="User" required autofocus value="<?php echo $user; ?>" >
					<input type="password" id="txtClave" name="txtClave" maxlength="15" class="form-control" placeholder="Password" required value="<?php echo $password; ?>" >
					<div id="remember" class="checkbox">
						<label>
							<input type="checkbox" value="1" id="chkacuerdate" name="chkacuerdate" <?php echo $check; ?>/> Recordar
						</label>
					</div>
					<?php if (isset($_SESSION["result"]) && !$_SESSION["result"]["success"]) {?>
					<div class="form-group">
					  	<span style="color:red"><?php  echo $_SESSION["result"]["message"]; ?></span>
					</div>
					<?php } session_destroy(); ?>
					
					<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar Sesión</button>
				</form>
			</div>
		</div>
	  
		<!-- Jquery -->        
		<script src="<?php echo base_url('public/libs/jquery/jquery-1.9.1.min.js'); ?>"></script>
		<!--fin-->

		<!-- jquery ui -->
		<script src="<?php echo base_url('public/libs/jquery-ui-1.12.1.custom/jquery-ui.js'); ?>"></script>
		<!--fin-->

		<!-- bootstrap -->
		<script src="<?php echo base_url('public/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js'); ?>"></script>
		<!-- fin-->
	</body>
</html>