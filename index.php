<?php session_start();
    if(isset($_SESSION['usuario'])){
        header('Location: principal.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="valida.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="caja1"><p>Nombre de Usuario</p>
				<p><input type="text" id="caja1" name="usuario" placeholder="usuario" required></p>
		</label>
	 	<label for="caja2"><p>Contraseña</p>
	 		<p><input type="password" id="caja2" name="password" placeholder="contraseña" required></p>
	 	</label>
	 	<input type="submit" value="Iniciar sesion" >
    </form>
    <button onclick="registrar()">Registrarse</button>
    <script type="text/javascript">
    	function registrar(){
    		window.location="registrar_user.php";
    	}
    </script>
</body>
</html>