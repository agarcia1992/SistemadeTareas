<?php

    session_start();
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];


    
        $oracle = oci_connect("bd1","bd1","localhost/XE");
        $sql = "Select * from usuario where nombre_usuario = '$usuario'";
        $result = oci_parse($oracle,$sql);
        oci_execute($result);
        while(($scar = oci_fetch_array($result,OCI_BOTH))!=false){
            if($contraseña==$scar[2]){
            echo "Bienvenido";
             }
            else{
            echo "Contraseña Incorrecta";
            }
           
        }
        
       
    
    
?>