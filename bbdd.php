<?php

        function connectBBDD()
        {
                //$mysqli = new mysqli("192.168.0.76", "root", "", "PhotoPlay");
                $mysqli = new mysqli("127.0.0.1", "root", "", "PhotoPlay");
                if($mysqli->connect_errno)
                {
                        echo "Fallo en la conexión: ".$mysqli->connect_errno;
                }
                return $mysqli;
        }
    
        function getPreguntas()
        {
                $url = 'http://192.168.0.97:8080/api/preguntasIngles';    
 
                $curl = curl_init();

                curl_setopt($curl, CURLOPT_URL, $url);

                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                curl_setopt($curl, CURLOPT_HEADER, false);

                $data = curl_exec($curl);
                $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

                //var_dump($curl);

                curl_close($curl);
                //var_dump($data);
                $response = json_decode($data, true);
                $preguntas = $response['data'];

                return $preguntas;
        }

        function insertarUsuario($nombre, $pass, $correo, $admin)
        {
                $mysqli = connectBBDD();

                $sql = "INSERT INTO Usuario(nombreUsuario, pass, correo, administrador) VALUES (?, ?, ?, ?)";

                $sentencia = $mysqli->prepare($sql);
                if(!$sentencia)
                {
                        echo "Fallo en la preparacion de la sentencia: ".$mysqli->errno;
                }

                $asignar = $sentencia->bind_param("sssi", $nombre, $pass, $correo, $admin);
                if(!$asignar)
                {
                         echo "Fallo al asignar la sentencia: ".$mysqli->errno;
                }

                $ejecucion = $sentencia->execute();
                if(!$ejecucion)
                {
                        echo "Fallo en la ejecución de la sentencia: ".$mysqli->errno;
                }

                $mysqli->close();
                return $ejecucion;
  
        }
        
        //var_dump($data);
        //var_dump($preguntas[0]['pregunta']);
       
        //var_dump($tamaño);
        /*
        function getPreguntas()
        {
                $preguntas = conectarUrl();
                $tamaño = sizeof($preguntas);
                $preguntasRet = array();
                
                for($i=0; $i < $tamaño; $i++)
                {
                        //$titulos[$i] = $preguntas[$i]['pregunta'];
                        $pregunta = array(
                                'pregunta' => $preguntas[$i]['pregunta'],
                                'respuestas' => $preguntas[$i]['respuestas']                             
                              );
                              $preguntasRet[] = $pregunta;
                        
                } 
                return $preguntasRet;
        }

        $preguntas = conectarUrl();
        //var_dump(conectarUrl());

        //$respuesta = $preguntas[0]['respuestas'][0]['respuesta1'];
        //var_dump($respuesta);
        //var_dump(getPreguntas());
     */   

?>