<?php
    
    $pregunta = [
	    
        "validada" => true
	
    ];

    var_dump($pregunta);
   
    include 'bbdd.php';  
    

    $funciona = modificarPregunta($pregunta, $_GET['idPregunta']);

      
    header("location: verPreguntas.php");
    
    
    
    
  

?>