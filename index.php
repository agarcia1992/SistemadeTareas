<?php
  include ("Conexion/conexionOracle.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Bienvenido al Sistema de Gestion de Tareas</title>
      <link rel="estilosheet" href="css/estilo.css" /> 
    </head>
    <body>
      
      <section class="form-login">
        <form action="controlador/validarSesion.php" method="POST">
            <h5>Bienvenido al Sistema de Gestion de Tareas</h5>
            <input class="comtrols" type="text" name="usuario" value="" placeholder="Usuario">
            <input class="comtrols" type="password" name="contraseña" value="" placeholder="Contraseña">
            <input class="btn btn-primary btn-lg" type="submit" name="validar" value="Ingresar">
        </form> 

      </section>

    </body>
</html>

