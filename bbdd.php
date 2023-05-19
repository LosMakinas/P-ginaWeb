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

        function insertarPregunta($pregunta)
        {
                $url = 'http://192.168.0.97:8080/api/preguntas';
                
                
                
                $opciones = array(
                        "http" => array(
                            "header" => "Content-type: application/json\r\n",
                            "method" => "POST",
                            "content" => json_encode($pregunta), # Agregar el contenido definido antes
                        ),
                    );
                    # Preparar petición
                    $contexto = stream_context_create($opciones);
                    # Hacerla
                    $resultado = file_get_contents($url, false, $contexto);
                    if ($resultado === false) {
                        echo "Error haciendo petición";
                        exit;
                    }
  
                    # si no salimos allá arriba, todo va bien
                    $resultadoJson = json_decode($resultado, true);
                    $pregunta['imagen'] = "Images/". $resultadoJson['data']['_id'] . $pregunta['imagen'];

                    $opciones = array(
                        "http" => array(
                            "header" => "Content-type: application/json\r\n",
                            "method" => "POST",
                            "content" => json_encode($pregunta), # Agregar el contenido definido antes
                        ),
                    );
                    # Preparar petición
                    $contexto = stream_context_create($opciones);
                    # Hacerla
                    $resultado = file_get_contents($url, false, $contexto);
                    if ($resultado === false) {
                        echo "Error haciendo petición";
                        exit;
                    }
                    
                    return $resultadoJson['data']['_id'];

                    //echo json_encode($pregunta);
        }

        function getPreguntaId($id)
        {

                $url = 'http://192.168.0.97:8080/api/preguntas/'.$id;    
 
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
                $pregunta = $response['data'];

                return $pregunta;
        }

        function modificarPregunta($pregunta, $id)
        {

                $url = 'http://192.168.0.97:8080/api/preguntas/'.$id;

                $opciones = array(
                        "http" => array(
                            "header" => "Content-type: application/json\r\n",
                            "method" => "PUT",
                            "content" => json_encode($pregunta), # Agregar el contenido definido antes
                        ),
                    );
                    # Preparar petición
                    $contexto = stream_context_create($opciones);
                    # Hacerla
                    $resultado = file_get_contents($url, false, $contexto);
                    if ($resultado === false) {
                        echo "Error haciendo petición";
                        exit;
                    }

                    var_dump($resultado);

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

        function login($usuario, $pass)
        {
                $mysqli = connectBBDD();

                $sql = "SELECT idUsuario FROM Usuario WHERE nombreUsuario = ? AND pass = ?";

                $sentencia = $mysqli->prepare($sql);
                if(!$sentencia)
                {
                        echo "Fallo en la preparacion de la sentencia: ".$mysqli->errno;
                }

                $asignar = $sentencia->bind_param("ss", $usuario, $pass);
                if(!$asignar)
                {
                        echo "Fallo al asignar la sentencia: ".$mysqli->errno;
                }

                $ejecucion = $sentencia->execute();
                if(!$ejecucion)
                {
                        echo "Fallo en la ejecución de la sentencia: ".$mysqli->errno;
                }

                $id_usuario = 0;

                $vincular = $sentencia->bind_result($id_usuario);
                if(!$vincular)
                {
                        echo "Fallo al vincular parametros: ".$mysqli->errno;
                }


                if($sentencia->fetch())
                {

                }

                $mysqli->close();

                return $id_usuario;
        }
        
        $preguntas = getPreguntas();
        //var_dump($preguntas);
        //var_dump(getPreguntaId("645cc02edf46698e54d33af9")['respuesta1']['respuesta']);
        //var_dump($preguntas);
        //var_dump($preguntas[0]['respuesta1'][0]['correcta']);
        //var_dump($preguntas[0]['respuesta1']['respuesta']);

?>