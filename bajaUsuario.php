<?php

    session_start();
    $id = $_GET['idUsuario'];
 
    include 'bbdd.php';

    session_destroy();
    $funciona = eliminarUsuario($id);
    
    
    header("location: login.php");

  

?>