<?php

    $pregunta = $_POST['pregunta'];
    $respuesta1 = $_POST['respuesta1'];
    $respuesta2 = $_POST['respuesta2'];
    $respuesta3 = $_POST['respuesta3'];
    $respuesta4 = $_POST['respuesta4'];

    $descripcion = $_POST['descripcion'];

    
  
    $tiempo = $_POST['tiempo'];
    $dificultad = $_POST['dificultades'];

    $tematica = $_POST['tematica'];
    $respuestaCor = $_POST['preguntaCor'];

    if($dificultad == "Facil")
    {
        $dificultad = 1;
    }
    else if($dificultad == "Normal")
    {
        $dificultad = 2;
    }
    else if($dificultad == "Dificil")
    {
        $dificultad = 3;
    }

    
    

    $pregunta = [
	    "pregunta" => $pregunta,
        "respuesta1" => [
			"respuesta" => $respuesta1,
			"correcta" => 	false
		],
        "respuesta2" => [
			"respuesta" => $respuesta2,
			"correcta" => 	false
		],
        "respuesta3" => [
			"respuesta" => $respuesta3,
			"correcta" => 	false
		],
        "respuesta4" => [
			"respuesta" => $respuesta4,
			"correcta" => 	false
		],
	    "dificultad" => $dificultad,
	    "tiempo" => $tiempo,
        "tematica" => $tematica,
        "descripcion" => $descripcion
	
    ];

    if($respuestaCor == 1)
    {
        $pregunta['respuesta1']['correcta'] = true;
    }
    else if($respuestaCor == 2)
    {
        $pregunta['respuesta2']['correcta'] = true;
    }
    else if($respuestaCor == 3)
    {
        $pregunta['respuesta3']['correcta'] = true;
    }
    else if($respuestaCor == 4)
    {
        $pregunta['respuesta4']['correcta'] = true;
    }
    

    //var_dump($pregunta);

    
    
    include 'bbdd.php';

    $funciona = modificarPregunta($pregunta, $_POST['id']);

    
    
    header("location: index.php");
    
    
    
    
  

?>