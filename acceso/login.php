<?php 
	session_start();
	if(isset($_SESSION['usr'])){
        header('Location: panel.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		#cont{
			width: 40%;
			margin: 0 auto;
			top: 5em;
		}

		.block{
			display: block;
			margin-top: 10px!important
		}

		.w{
			width: 100%;
		}

		.center{
			/*text-align: center;*/
		}

		label{
			display: block;
		}

		input[type="text"], input[type="password"]{
			width: 200px;
			padding: 6px 12px;
		}

		input[type="submit"]{
			padding: 12px 12px;
			font-size: 16px;
			cursor: pointer;
		}

	</style>
</head>
<body>
	<form method="POST" action="procesar.php" name="frm" id="frm">
		<div id="cont">
			<div class="block w center" style="text-align: left;">
				<h2>Iniciar sesion</h2>
			</div>
			<?php 
				//if(isset($_GET['error']) && !empty($_GET['error'])){
			?>
				<!--<div class="block w center" style="text-align: left;">
					<p><?//='Usuario y/o Password incorrectos';?></p>
				</div>-->
			<?php					
				//}
			?>
			<!--<div class="block w center">
				<label>Usuario:</label>
				<input type="text" name="user" id="user">
			</div>-->
			<div class="block w center">
				<label>Password:</label>
				<input type="password" name="pass" id="pass">
			</div>
			<div class="block w center">
				<input type="submit" name="btn" id="btn" value="Ingresar">
			</div>
		</div>
	</form>
</body>
</html>