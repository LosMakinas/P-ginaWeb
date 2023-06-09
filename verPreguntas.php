<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Ollie landing page.">
    <meta name="author" content="Devcrud">
    <title>Los Maquinas: Home</title>

    <!-- font icons -->
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    
    <!-- owl carousel -->
    <link rel="stylesheet" href="vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
	<link rel="stylesheet" href="css/ollie.css">
    <link rel="stylesheet" href="css/style2.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo-definitivo.png" alt="" class="brand-img"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <?php
                        session_start();
                        if(empty($_SESSION['usuario']))
                        {
                            echo '<a class="nav-link" href="login.php">Login</a>';
                        }

                        include 'bbdd.php';
                        $usuario = getUsuarioId($_SESSION['idUsuario']);
                        
                        if(empty($_SESSION['usuario']) || !$usuario['administrador'])
                        {
                            header('location: index.php');
                        }
                        
                    ?>
                    </li>
                    <li class="nav-item">
                    <?php
                        if(empty($_SESSION['usuario']))
                        {
                            echo '<a class="nav-link" href="register.php">Registro</a>';
                        }
                        
                    ?>   
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="verPreguntas.php">Ver Preguntas</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                    <?php
                            //session_start();

                            if(!empty($_SESSION['usuario']) && isset($_SESSION['usuario']))
                            {
                                
                                
                                echo '<a class="nav-link btn btn-primary" href="preguntas.php">Crear Pregunta</a>';
                                
                                
                            }
                            
                        ?>
                       
                       </li>
                        <?php
                            if(!empty($_SESSION['usuario']) && isset($_SESSION['usuario']))
                            {
                            
                                echo '<a class="nav-link" href="cerrarSesion.php">Cerrar sesión</a>';
                                echo '<a class="nav-link" href="modificarUsuario.php">Hola '.$_SESSION['usuario'].'</a>';
                                echo '<a class="nav-link" href="bajaUsuario.php">Darse de baja</a>';
                            
                            }

                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <header id="home" class="header">
        <div class="overlay"></div>

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">  
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block">
                            <div id = "contenido">
                                <h2 id="titulo">Preguntas almacenadas</h2>
                                <ul>
                                  <!--<li>-->
                                    <?php

                                        include_once 'bbdd.php';
                                        $preguntas = getPreguntasValidadas(); 
                                        $tamaño = sizeof($preguntas);

                                        for($i = 0; $i < $tamaño; $i++)
                                        {

                                            echo '<div class ="pregunta">';
                                            echo '<h3>'.$preguntas[$i]['pregunta'].'</h3>';
                                            echo '<h4>'.$preguntas[$i]['descripcion'].'</h4>';
                                            /*
                                            for($j = 0; $j < 4; $j++)
                                            {
                                                if($preguntas[$i]['respuestas'][$j]['correcta'])
                                                {
                                                    echo '<p>Respuesta '.($j+1).': '.$preguntas[$i]['respuestas'][$j]['respuesta'.($j+1)].' [Correcta]</p>';
                                                }
                                                echo '<p>Respuesta '.($j+1).': '.$preguntas[$i]['respuestas'][$j]['respuesta'.($j+1)].'</p>';
                                            }
                                            */
                                            
                                            if($preguntas[$i]['respuesta1']['correcta'])
                                            {
                                                echo '<p>Respuesta 1: '.$preguntas[$i]['respuesta1']['respuesta'].' [Correcta]</p>';
                                            }
                                            else{
                                                echo '<p>Respuesta 1: '.$preguntas[$i]['respuesta1']['respuesta'].'</p>';
                                            }

                                            if($preguntas[$i]['respuesta2']['correcta'])
                                            {
                                                echo '<p>Respuesta 2: '.$preguntas[$i]['respuesta2']['respuesta'].' [Correcta]</p>';
                                            }
                                            else{
                                                echo '<p>Respuesta 2: '.$preguntas[$i]['respuesta2']['respuesta'].'</p>';
                                            }

                                            if($preguntas[$i]['respuesta3']['correcta'])
                                            {
                                                echo '<p>Respuesta 3: '.$preguntas[$i]['respuesta3']['respuesta'].' [Correcta]</p>';
                                            }
                                            else{
                                                echo '<p>Respuesta 3: '.$preguntas[$i]['respuesta3']['respuesta'].'</p>';
                                            }

                                            if($preguntas[$i]['respuesta4']['correcta'])
                                            {
                                                echo '<p>Respuesta 4: '.$preguntas[$i]['respuesta4']['respuesta'].' [Correcta]</p>';
                                            }
                                            else{
                                                echo '<p>Respuesta 4: '.$preguntas[$i]['respuesta4']['respuesta'].'</p>';
                                            }

                                            echo '<p><b>Segundos para resolverlo: </b>'.$preguntas[$i]['tiempo'].'</p>';
                                            echo '<p><b>Tema: </b>'.$preguntas[$i]['tematica'].'</p>';
                                            echo '<p><b>Dificultad: </b>'.$preguntas[$i]['dificultad'].'</p>';
                                            
                                            if(!empty($_SESSION['usuario']) && isset($_SESSION['usuario']))
                                            {
                                                
                                                $usuario = getUsuarioId($_SESSION['idUsuario']);

                                                if(!$preguntas[$i]['validada'])
                                                {
                                                    echo '<div class="actions">';
                                                        echo '<a href="modificarPregunta.php?idPregunta='.$preguntas[$i]['_id'].'"><button class="btn-favorite">Editar</button></a>';
                                                        echo '<a href="eliminarPregunta.php?idPregunta='.$preguntas[$i]['_id'].'"><button class="btn-report">Eliminar</button></a>';

                                                        if ($usuario['administrador'])
                                                        {
                                                            echo '<a href="validarPregunta.php?idPregunta='.$preguntas[$i]['_id'].'"><button class="btn-report">Validar</button></a>';
                                                        }
                                                                                                    
                                                    echo '</div>';
                                                }
                                                
                                                else
                                                {
                                                    if ($usuario['administrador'])
                                                    {
                                                        echo '<div class="actions">';
                                                            echo '<a href="modificarPregunta.php?idPregunta='.$preguntas[$i]['_id'].'"><button class="btn-favorite">Editar</button></a>';
                                                            echo '<a href="eliminarPregunta.php?idPregunta='.$preguntas[$i]['_id'].'"><button class="btn-report">Eliminar</button></a>';                                               
                                                        echo '</div>';
                                                    }
                                                }
                                                
                                
                                            }

                                            
                                            echo '</div>';
                                            
                                        }
                                        
                                        ?>
                                    
                                        
                                  <!--</li>-->
                                  
                                </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        
    </header>
	<!-- core  -->
    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    
    <!-- Owl carousel  -->
    <script src="assets/vendors/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="assets/js/Ollie.js"></script>

</body>
</html>
