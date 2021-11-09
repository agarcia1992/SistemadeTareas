<?php
    require_once("../Conexion/conexionOracle.php");
    session_start();

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    

        if(empty($usuario) || empty($contrasena)){
            echo "Usuario o Contraseña Vacios.";
              
            }        
            else{
               
                $sql = "Select * from usuario where nombre_usuario = '$usuario'";
                $result = oci_parse($oracle,$sql);
                oci_execute($result);
                
                while(($scar = oci_fetch_array($result,OCI_BOTH))!=false){
                    if($contrasena==$scar['CONTRASENA_USUARIO']){   
                            $_SESSION['nombreUsuario']= $scar['NOMBRE_USUARIO'];
                            $_SESSION['IdUsuario']=$scar['ID_USUARIO'];
                            echo "Bienvenido <br>"; 
                            echo $_SESSION['nombreUsuario'];
                            header("Location:../vista/menu.php"); 
                        }
                        else{
                            echo "Contraseña Incorrecta.";
                        }
            }
        }    
        
        
       
    
    
?>