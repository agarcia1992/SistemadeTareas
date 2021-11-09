
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Bienvenido al Sistema de Gestion de Tareas</title>
      <link rel="stylesheet" href="../css/estilo.css">
    </head>
    <body>
      <div class="container">
        <div class="form-login">
          <form action="../controlador/validarSesion.php" method="POST">
              <h5>Bienvenido al Sistema de Gestion de Tareas</h5>
              <input class="comtrols" type="text" name="usuario" value="" placeholder="Usuario">
              <input class="comtrols" type="password" name="contrasena" value="" placeholder="Contraseña">
              <br>
              <input class="buttons" type="submit" name="validar" value="Ingresar">
          </form> 

        </div>
      </div>
    </body>
</html>

