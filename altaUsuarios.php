<?php

session_start();

  $nombre = $_POST['usuario'];
  $pass = $_POST['password'];
  $correo = $_POST['correo'];

  var_dump($nombre);
  var_dump($pass);
  var_dump($correo);
  
  include 'bbdd.php';

  $funciona = insertarUsuario($nombre, $pass, $correo, 0);

  if($funciona)
  {
    header("location: index.php");
  }
  else
  {
    header("location: register.php");
  }
  

?>