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
                            else
                            {
                                header('location: login.php');
                            }

                            $id = $_SESSION['idUsuario'];
                            include 'bbdd.php';
                            $usuario = getUsuarioId($id);

                            
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
                            <div id="contForm">
                                
                                    <form action="updateUsuario.php" method="post">
                                    <label for="usuario">Nombre Usuario:</label>
                                    <?php
                                    
                                        echo '<input type="text" name="usuario" id="nomUsu" value="'.$usuario['nombreUsuario'].'">';
                                    ?>
                                    <label for="correo">Correo Electronico:</label>
                                    <?php
                                    
                                        echo '<input type="text" name="correo" id="corElec" value="'.$usuario['correo'].'">';
                                    ?>
                                    <label for="password">Palabra Clave:</label>
                                    <?php
                                    
                                        echo '<input type="password" name="password" id="pass1" value="'.$usuario['pass'].'">';
                                    ?>
                                    <label for="repassword">Repetir Palabra Clave:</label>
                                    <?php
                                    
                                        echo '<input type="password" name="repassword" id="pass2" value="'.$usuario['pass'].'">';
                                    ?>
                                    <input type="submit" value="Modificar Usuario" id="registrar">
                                    <input type="hidden" id="idUsu" value=<?php echo $id;?>>
                                </form>
                                <p id="error">Error</p>
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
    <!--Registro-->
    <script src="js/modificar.js" type="text/javascript"></script>
</body>
</html>
