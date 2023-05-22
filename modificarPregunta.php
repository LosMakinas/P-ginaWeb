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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="verPreguntas.php">Ver Preguntas</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                    <?php
                            session_start();
                            
                            if(!empty($_SESSION['usuario']) && isset($_SESSION['usuario']))
                            {
                                
                                
                                echo '<a class="nav-link btn btn-primary" href="preguntas.php">Crear Pregunta</a>';
                                echo '<a class="nav-link" href="cerrarSesion.php">Cerrar sesión</a>';
                                
                            }
                            
                            $id = $_GET['idPregunta'];
                            include 'bbdd.php';

                            $pregunta = getPreguntaId($id);
                            
                        ?>
                    </li>
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
                                <h2 id="titulo">Modifica la pregunta</h2>
                                <form action="updatePregunta.php" method="post" enctype="multipart/form-data">
                                  <label for="pregunta">Pregunta:</label>
                                  <?php                                 
                                    echo '<input type="text" id="pregunta" class="pregunta" name="pregunta" value = "'.$pregunta['pregunta'].'">';
                                    echo '<input type="hidden" name="id" value = "'.$pregunta['_id'].'">';
                                  ?>                                  
                                  <label for="respuesta">Respuesta 1:</label>
                                  <?php                                  
                                    echo '<textarea id="respuesta1" class="pregunta" name="respuesta1">'.$pregunta['respuesta1']['respuesta'].'</textarea>';
                                  ?>
                                  <label for="respuesta">Respuesta 2:</label>
                                  <?php                                  
                                    echo '<textarea id="respuesta2" class="pregunta" name="respuesta2">'.$pregunta['respuesta2']['respuesta'].'</textarea>';
                                  ?>
                                  <label for="respuesta">Respuesta 3:</label>
                                  <?php                                 
                                    echo '<textarea id="respuesta3" class="pregunta" name="respuesta3">'.$pregunta['respuesta3']['respuesta'].'</textarea>';
                                  ?>
                                  <label for="respuesta">Respuesta 4:</label>
                                  <?php                                 
                                    echo '<textarea id="respuesta4" class="pregunta" name="respuesta4">'.$pregunta['respuesta4']['respuesta'].'</textarea>';
                                  ?>
                                  <label for="descripcion">Descripción:</label>
                                  <?php                                 
                                    echo '<textarea id="descripcion" class="pregunta" name="descripcion">'.$pregunta['descripcion'].'</textarea>';
                                  ?>
                                  <div id="imagen">
                                    <label for="image">Imagen: </label>
                                    <?php                                    
                                        echo '<input type="file" title=" " id="archivoPreg" name= "imagen">';
                                    ?>
                                  </div>
                                  <div id="temporizador">
                                  <label for="tiempo">Segundos para resolver la pregunta:</label>
                                  <?php                                  
                                    echo '<input type="number" name="tiempo" id="tiempo" value = "'.$pregunta['tiempo'].'">';
                                  ?>
                                  </div>
                                  <div class="dropdownDif">
                                    <label for="dificultades">Dificultades:</label>
                                    
                                    
                                        <select name="dificultades" id="dificultades" >
                                        <?php
                                        $dificultad = $pregunta['dificultad'];                                                                       

                                        
                                        if($dificultad == 1)
                                        {
                                            echo '<option value="1" selected>Facil</option>';                                           
                                            echo '<option value="2">Normal</option>';
                                            echo '<option value="3">Dificil</option>';
                                        }
                                        else if($dificultad == 2)
                                        {
                                            echo '<option value="1">Facil</option>';                                           
                                            echo '<option value="2" selected>Normal</option>';
                                            echo '<option value="3">Dificil</option>';
                                        }
                                        else if($dificultad == 3)
                                        {
                                            echo '<option value="1">Facil</option>';                                           
                                            echo '<option value="2">Normal</option>';
                                            echo '<option value="3" selected>Dificil</option>';
                                        }
                                        
                                    ?>
                                      
                                      
                                      
                                    </select>
                                    
                                  </div>
                                    <div class="dropdownDif">
                                    <label for="tematica">Tematica:</label>
                                    <?php
                                        $tematica = $pregunta['tematica'];
                                        echo '<select name="tematica" id="tematica" >';

                                        if($tematica == "ingles")
                                        {
                                            echo '<option value="FOL">FOL</option>';
                                            echo '<option value="ingles" selected>Ingles</option>';
                                        }
                                        else if($tematica == "FOL")
                                        {
                                            echo '<option value="FOL" selected>FOL</option>';
                                            echo '<option value="ingles">Ingles</option>';
                                        }
                                    ?>
                                      
                                      
                                    </select>
                                    
                                  </div>
                                  <label for="radios" id="labelRadios">Cual es la correcta: </label>
                                  <div id="radio">
                                  
                                  <?php
                                    
                                    $correcta=0;
                                    if($pregunta['respuesta1']['correcta'])
                                    {
                                        echo '<label for="pregunta1">Respuesta 1: </label>';
                                        echo '<input type="radio" id="radio1" class = "radioPreg" name="preguntaCor" value="1" checked>';                                        
                                    }
                                    else
                                    {
                                        echo '<label for="pregunta1">Respuesta 1: </label>';
                                        echo '<input type="radio" id="radio1" class = "radioPreg" name="preguntaCor" value="1">';     
                                    }

                                    if($pregunta['respuesta2']['correcta'])
                                    {
                                        echo '<label for="pregunta2">Respuesta 2: </label>';
                                        echo '<input type="radio" id="radio2" class = "radioPreg" name="preguntaCor" value="2" checked>';                                        
                                    }
                                    else
                                    {
                                        echo '<label for="pregunta2">Respuesta 2: </label>';
                                        echo '<input type="radio" id="radio2" class = "radioPreg" name="preguntaCor" value="2">';     
                                    }

                                    if($pregunta['respuesta3']['correcta'])
                                    {
                                        echo '<label for="pregunta3">Respuesta 3: </label>';
                                        echo '<input type="radio" id="radio3" class = "radioPreg" name="preguntaCor" value="3" checked>';                                        
                                    }
                                    else
                                    {
                                        echo '<label for="pregunta3">Respuesta 3: </label>';
                                        echo '<input type="radio" id="radio3" class = "radioPreg" name="preguntaCor" value="3">';     
                                    }

                                    if($pregunta['respuesta4']['correcta'])
                                    {
                                        echo '<label for="pregunta4">Respuesta 4: </label>';
                                        echo '<input type="radio" id="radio4" class = "radioPreg" name="preguntaCor" value="4" checked>';                                        
                                    }
                                    else
                                    {
                                        echo '<label for="pregunta4">Respuesta 4: </label>';
                                        echo '<input type="radio" id="radio4" class = "radioPreg" name="preguntaCor" value="4">';     
                                    }

                                  ?>
                                  </div>
                                  <p id="error">Error/es: </p>
                                  <input type="submit" value="Modificar pregunta" id="enviarPreg">
                                </form>
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
    <!--Preguntas-->
    <script src="js/editarPreguntas.js"></script>
</body>
</html>
