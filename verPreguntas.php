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
                        <a class="nav-link" href="index.php">Ver Preguntas</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <a class="nav-link btn btn-primary" href="preguntas.php">Crear Pregunta</a>
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
                                <h2 id="titulo">Preguntas almacenadas</h2>
                                <ul>
                                  <li>
                                    <h3>¿Qué es HTML?</h3>
                                    <h4>HTML es un lenguaje de marcado utilizado para crear páginas web.</h4>
                                    <img src="images/logo-definitivo.png" alt="Imagen Pregunta">
                                    <p>Respuesta 1</p>
                                    <p>Respuesta 2</p>
                                    <p>Respuesta 3</p>
                                    <p>Respuesta 4</p>
                                    <p><b>Segundos para resolverlo:</b> 60</p>
                                    <p><b>Tema: </b>FOL</p>
                                    <p><b>Dificultad:</b> Facil</p>
                                    <div class="actions">
                                        <button class="btn-favorite">Editar</button>
                                        <button class="btn-favorite">Dar de alta</button>
                                        <button class="btn-report">Eliminar</button>
                                    </div>
                                  </li>
                                  <li>
                                    <h3>¿Qué es CSS?</h3>
                                    <h4>CSS es un lenguaje utilizado para dar estilo a las páginas web.</h4>
                                    <img src="images/logo-definitivo.png" alt="Imagen Pregunta">
                                    <p>Respuesta 1</p>
                                    <p>Respuesta 2</p>
                                    <p>Respuesta 3</p>
                                    <p>Respuesta 4</p>
                                    <p><b>Segundos para resolverlo:</b> 60</p>
                                    <p><b>Tema: </b>FOL</p>
                                    <p><b>Dificultad:</b> Facil</p>
                                    <div class="actions">
                                      <button class="btn-favorite">Editar</button>
                                      <button class="btn-favorite">Dar de alta</button>
                                      <button class="btn-report">Eliminar</button>
                                    </div>
                                  </li>
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
