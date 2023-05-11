<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <link rel="stylesheet" href="css/style.css">
    <title>Informatikalmi</title>
</head>
<body>
  <?php
  include_once 'menu.php';
  ?>
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
    <footer>

    </footer>
    </div>
</body>
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/hamburguesa.js"></script>
</html>