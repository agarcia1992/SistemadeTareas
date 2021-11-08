<?php
    require_once("../Conexion/conexionOracle.php");
    session_start();

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    

        if(empty($usuario) || empty($contraseña)){
            echo "Usuario o Contraseña Vacios.";
              
            }        
            else{
               
                $sql = "Select * from usuario where nombre_usuario = '$usuario'";
                $result = oci_parse($oracle,$sql);
                oci_execute($result);
                while(($scar = oci_fetch_array($result,OCI_BOTH))!=false){
                    if($contraseña==$scar[2]){   
                            echo "Bienvenido";
                            header("Location:../vista/menu.php"); 
                        }
            }
        }    
        
        
       
    
    
?>