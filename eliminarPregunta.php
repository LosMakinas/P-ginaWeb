<?php
    include 'bbdd.php';

    eliminarPregunta($_GET['idPregunta']);

    header("location: verPreguntas.php");

?>