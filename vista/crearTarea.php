<?php
	session_start();
    require_once("../Conexion/conexionOracle.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menú</title>
    <link rel="stylesheet" href="../css/estiloFormulario.css">
</head>
<body>
<div class="container-formulario">
        <div class="form-formulario">
          <form action="../controlador/validar_crear_tarea.php" method="POST">
              <h5>Registrar Tarea</h5>
              <label for="codigoTareaL">Codigo Tarea</label>
              <input class="comtrols" type="text" name="codigoTarea" value="" >
              <BR>
              <label for="nombreTareaL">Nombre de Tarea:</label>
              <input class="comtrols" type="text" name="nombreTarea" value="">
              <br>
              <label for="inicio">Fecha Inicio:</label>
              <input class="comtrols" type="date" name="fechaInicio" value="">
              <br>
              <label for="fin">Fecha Fin:</label>
              <input class="comtrols" type="date" name="fechaFin" value="" placeholder="Contraseña">
              <br>
              <textarea name="descripcion" rows="10" cols="40"> Escriba una descripción.</textarea>
              <br><br>
              <label for="rol">Rol</label>
              <select name="usuarioRol" id="usu">
              <option value ='0'>Seleccione</option>
              <?php
                $sql = "Select * from rol";
                $result =  oci_parse($oracle,$sql);
                oci_execute($result);
                while(($scar = oci_fetch_array($result,OCI_BOTH))!=false){
                    echo '<option value="'.$scar['ID_ROL'].'">'.$scar['NOMBRE_ROL'].'</option>'; 
                }
              ?>
              </select>
              <BR>
              <br>
              <label for="rol">Area</label>
              <select name="usuarioArea" id="area">
              <option value ='0'>Seleccione</option>
              <?php
                $sql2 = "Select * from area";
                $result2 =  oci_parse($oracle,$sql2);
                oci_execute($result2);
                while(($scar2 = oci_fetch_array($result2,OCI_BOTH))!=false){
                    if($scar2['ID_AREA'] == 1 ){
                        ?> <option value ='0'>Seleccione</option> <?php
                    }
                    else{
                        echo '<option value="'.$scar2['ID_AREA'].'">'.$scar2['NOMBRE_AREA'].'</option>'; 
                    }
                    
                }
              ?>
              </select>
              <br><br>
              <input class="buttons" type="submit" name="validar" value="Ingresar">
          </form> 


    </div>
</div>
</body>
</html>