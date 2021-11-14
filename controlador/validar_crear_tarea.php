<?php
    require_once("../Conexion/conexionOracle.php");
    session_start();

    $codigo_tarea = $_POST["codigoTarea"];
    $nombre_tarea = $_POST["nombreTarea"];
    $fechaInicio = $_POST["fechaInicio"];
    $fechaFinal = $_POST["fechaFin"];
    $Descripcion = $_POST["descripcion"];
    $UsuarioRol = $_POST["usuarioRol"];
    $UsuarioArea = $_POST["usuarioArea"];
    

        if(empty($codigo_tarea) || empty($nombre_tarea) || empty($fechaInicio) || empty($Descripcion) || empty($UsuarioRol) || empty($UsuarioArea)) 
        {
            echo "Capos Obligatorios Vacios";
              
            }        
            else{
               echo $fechaInicio."<br>";
                
               echo $fechaFinal;
                $sql = "INSERT INTO tarea VALUES($codigo_tarea,'$nombre_tarea','$fechaInicio','$fechaFinal','$Descripcion',$UsuarioRol,$UsuarioArea)";
                $result = oci_parse($oracle,$sql);
                oci_execute($result);
                echo $result;
                
                header("Location:../vista/menu.php");  
        }    
        
        
       
    
    
?>