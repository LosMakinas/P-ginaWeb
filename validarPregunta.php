<?php
    
    $pregunta = [
	    
        "validado" => true
	
    ];

    //var_dump($pregunta);
   
    include 'bbdd.php';  
    

    $funciona = modificarPregunta($pregunta, $_POST['id']);

        
    header("location: verPreguntas.php");
    
    
    
    
  

?>