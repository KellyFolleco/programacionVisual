<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nombre de usuario</label>
     	<input type="text" name="uname" placeholder="Ingrese nombre de usuario"><br>

     	<label>Contraseña</label>
     	<input type="password" name="password" placeholder="Ingrese contraseña"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>