<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menú</title>
	<link rel="stylesheet" href="../css/stl.css">
</head>
<body>
<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Logotipo</h1>
			</div>
			<nav class="menu">
				<a href="../controlador/cerrarsesion.php">Cerrar Sesion</a>
				<a href="#"><?php echo $_SESSION['nombreUsuario'] ?></a>
				
			</nav>
		</div>
	</header>
	<div class="capa"></div>

<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Numero 1</a>
			<a href="#">Numero 2</a>
			<a href="#">Numero 3</a>
			<a href="#">Numero 4</a>
			<a href="#">Numero 5</a>
			<a href="#">Numero 6</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>