<?php

    session_start();
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $pass = $_POST['password'];
    $id = $_SESSION['idUsuario'];

    
    include 'bbdd.php';

    $funciona = modificarUsuario($id, $usuario, $correo, $pass);

    

    header("location: index.php");
    
    
    
    
  

?>