<?php
session_start();

$_SESSION['idusuario']=0;
session_destroy();
header("location:../vista/index.php");
?>