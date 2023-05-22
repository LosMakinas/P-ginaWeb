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
                                
                                
                            }
                            //$usuario = $_SESSION['usuario'];
                            
                            
                        ?>
                    </li>
                    <?php
                        if(!empty($_SESSION['usuario']) && isset($_SESSION['usuario']))
                        {
                            
                            echo '<a class="nav-link" href="cerrarSesion.php">Cerrar sesión</a>';
                            echo '<a class="nav-link" href="modificarUsuario.php?idUsuario='.$_SESSION['idUsuario'].'">Hola '.$_SESSION['usuario'].'</a>';
                            echo '<a class="nav-link" href="bajaUsuario.php?idUsuario='.$_SESSION['idUsuario'].'">Darse de baja</a>';
                            
                        }

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
                                <h2 id="titulo">Agrega una nueva pregunta</h2>
                                <form action="insertarPregunta.php" method="post" enctype="multipart/form-data">
                                  <label for="pregunta">Pregunta:</label>
                                  <input type="text" id="pregunta" class="pregunta" name="pregunta">
                                  <label for="respuesta">Respuesta 1:</label>
                                  <textarea id="respuesta1" class="pregunta" name="respuesta1"></textarea>
                                  <label for="respuesta">Respuesta 2:</label>
                                  <textarea id="respuesta2" class="pregunta" name="respuesta2"></textarea>
                                  <label for="respuesta">Respuesta 3:</label>
                                  <textarea id="respuesta3" class="pregunta" name="respuesta3"></textarea>
                                  <label for="respuesta">Respuesta 4:</label>
                                  <textarea id="respuesta4" class="pregunta" name="respuesta4"></textarea>
                                  <label for="descripcion">Descripción:</label>
                                  <textarea id="descripcion" class="pregunta" name="descripcion"></textarea>
                                  <div id="imagen">
                                    <label for="image">Imagen: </label>
                                    <input type="file" title=" " id="archivoPreg" name= "imagen">
                                  </div>
                                  <div id="temporizador">
                                  <label for="tiempo">Segundos para resolver la pregunta:</label>
                                  <input type="number" name="tiempo" id="tiempo" >
                                  </div>
                                  <div class="dropdownDif">
                                    <label for="dificultades">Dificultades:</label>
                                    <select name="dificultades" id="dificultades" >
                                      <option value="-1">Seleccione un campo</option>
                                      <option value="1">Facil</option>
                                      <option value="2">Normal</option>
                                      <option value="3">Dificil</option>
                                    </select>
                                  </div>
                                    <div class="dropdownDif">
                                    <label for="tematica">Tematica:</label>
                                    <select name="tematica" id="tematica" >
                                      <option value="-1">Seleccione un campo</option>
                                      <option value="FOL">FOL</option>
                                      <option value="ingles">Ingles</option>
                                    </select>
                                  </div>
                                  <label for="radios" id="labelRadios">Cual es la correcta: </label>
                                  <div id="radio">
                                  <label for="pregunta1">Respuesta 1: </label>
                                  <input type="radio" id="radio1" class = "radioPreg" name="preguntaCor" value="1">
                                  <label for="pregunta2">Respuesta 2: </label>
                                  <input type="radio" id="radio2" class = "radioPreg" name="preguntaCor" value="2">
                                  <label for="pregunta3">Respuesta 3: </label>
                                  <input type="radio" id="radio3" class = "radioPreg" name="preguntaCor" value="3">
                                  <label for="pregunta4">Respuesta 4: </label>
                                  <input type="radio" id="radio4" class = "radioPreg" name="preguntaCor" value="4">
                                  </div>
                                  <p id="error">Error/es: </p>
                                  <input type="submit" value="Agregar pregunta" id="enviarPreg">
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
    <script src="js/preguntas.js"></script>
</body>
</html>
