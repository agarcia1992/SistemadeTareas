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
				<h1>Bienvenido al Sistema de Gestion de Tareas</h1>
			</div>
			<nav class="menu">
				<a href="../controlador/cerrarsesion.php">Cerrar Sesion</a>
				<a href="#">Usuario: <?php echo $_SESSION['nombreUsuario'] ?></a>
				<a href="#"><?php 
						switch($_SESSION['NombreRol']){
							case "Director IT":
								echo $_SESSION['NombreRol'];
								break;
							case "Jefe de Infraestructura":
								echo $_SESSION['NombreRol'];
								break;
							case "Jefe de Desarrollo":
								echo $_SESSION['NombreRol'];
								break;
							case "Desarrolladores":
								echo $_SESSION['NombreRol'];
								break;
							case "DBA":
								echo $_SESSION['NombreRol'];
								break;
							case "Consultores":
								echo $_SESSION['NombreRol'];
								break;
							case "Tecnicos":
								echo $_SESSION['NombreRol'];
								break;
							default:
								echo "Usuario Sin Rol";		
						}	?></a>
				
			</nav>
		</div>
	</header>
	<div class="capa"></div>

<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="crearTarea.php">Crear Nueva Tarea</a>
			<a href="#">Consultar Tareas</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>