<?php
    require_once("../Conexion/conexionOracle.php");
    session_start();

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    

        if(empty($usuario) || empty($contrasena)){
            echo "Usuario o Contraseña Vacios.";
              
            }        
            else{
               
                $sql = "Select u.id_usuario, u.nombre_usuario,u.contrasena_usuario,r.nombre_rol from usuario u, rol r where nombre_usuario = '$usuario' and u.id_rol = r.id_rol";
                $result = oci_parse($oracle,$sql);
                oci_execute($result);
                
                while(($scar = oci_fetch_array($result,OCI_BOTH))!=false){
                    if($contrasena==$scar['CONTRASENA_USUARIO']){   
                            $_SESSION['nombreUsuario']= $scar['NOMBRE_USUARIO'];
                            $_SESSION['IdUsuario']=$scar['ID_USUARIO'];
                            $_SESSION['NombreRol']=$scar['NOMBRE_ROL'];
                            header("Location:../vista/menu.php");    
                           
                        }
                        else{
                            echo "Contraseña Incorrecta.";
                        }
            }
        }    
        
        
       
    
    
?>