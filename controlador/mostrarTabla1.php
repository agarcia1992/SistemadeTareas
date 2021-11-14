<?php
    session_start();
    require_once("../Conexion/conexionOracle.php");
    $codigo_tarea = $_POST["codigoTarea"];
    $codigo_emple = $_POST["empleado"];
    $codigo_area = $_POST["Area"];


?>


<table>

                <tr>
                    <td>ID TAREA </td>
                    <td>TAREA </td>
                    <td>FECHA INICIO </td>
                    <td>FECHA FIN </td>
                    <td>DESCRIPCION</td>
                    <td>ID USUARIO </td>
                    <td>ID AREA </td>
                </tr>
                <?php
                  $sql3 ="SELECT * FROM tarea WHERE id_tarea = $codigo_tarea or id_area = $codigo_area or id_usuario = $codigo_emple";
                  $result3=oci_parse($oracle,$sql3);
                  oci_execute($result3);
                  while(($scar3 = oci_fetch_array($result3,OCI_BOTH))!=false){
                ?>
                <tr>
                    <td><?php echo $scar3['ID_TAREA'] ?></td>
                    <td><?php echo $scar3['NOMBRE_TAREA'] ?></td>
                    <td><?php echo $scar3['FECHA_INICIO'] ?></td>
                    <td><?php echo $scar3['FECHA_FIN'] ?></td>
                    <td><?php echo $scar3['DESCRIPCION'] ?></td>
                    <td><?php echo $scar3['ID_USUARIO'] ?></td>
                    <td><?php echo $scar3['ID_AREA'] ?></td>

                </tr>
                <?php } ?>
          </table>
