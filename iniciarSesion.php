<?php

  session_start();

  $usuario = $_POST['usuario'];
  $contraseña = $_POST['password'];

  var_dump($usuario);
  var_dump($contraseña);

  include 'bbdd.php';
  $id = login($usuario, $contraseña);

  if ($id) {
    header("location: index.php");
    $_SESSION['usuario'] = $usuario;
    $_SESSION['idUsuario'] = $id;
  }
  else {
    header("location: login.php");
  }


 ?>