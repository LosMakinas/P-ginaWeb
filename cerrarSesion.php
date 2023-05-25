<?php
  session_start();

  if(empty($_SESSION['usuario']))
  {
                                                              
    header('location: login.php');
                                                              
  }

  //session_destroy();
  unset($_SESSION['usuario']);
  header('location: index.php');
 ?>