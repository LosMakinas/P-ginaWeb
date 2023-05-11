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
    <h2 id="titulo">Agrega una nueva pregunta</h2>
    <form>
      <label for="pregunta">Pregunta:</label>
      <input type="text" id="pregunta" name="pregunta" required>
      <label for="respuesta">Respuesta 1:</label>
      <textarea id="respuesta" name="respuesta" required></textarea>
      <label for="respuesta">Respuesta 2:</label>
      <textarea id="respuesta" name="respuesta" required></textarea>
      <label for="respuesta">Respuesta 3:</label>
      <textarea id="respuesta" name="respuesta" required></textarea>
      <label for="respuesta">Respuesta 4:</label>
      <textarea id="respuesta" name="respuesta" required></textarea>
      <div id="imagen">
        <label for="image">Imagen: </label>
        <input type="file" title=" " required>
      </div>
      <div id="temporizador">
      <label for="tiempo">Segundos para resolver la pregunta:</label>
      <input type="number" name="tiempo" id="tiempo" required>
      </div>
      <div class="dropdownDif">
        <label for="dificultades">Dificultades:</label>
        <select name="dificultades" id="dificultades" required>
          <option value="-1">Seleccione un campo</option>
          <option value="1">Facil</option>
          <option value="2">Normal</option>
          <option value="3">Dificil</option>
        </select>
      </div>
        <div class="dropdownDif">
        <label for="tematica">Tematica:</label>
        <select name="tematica" id="tematica" required>
          <option value="-1">Seleccione un campo</option>
          <option value="FOL">FOL</option>
          <option value="Ingles">Ingles</option>
        </select>
      </div>
      <label for="radios" id="labelRadios">Cual es la correcta:</label>
      <div id="radio">
      <label for="pregunta1">Pregunta 1:</label>
      <input type="radio" id="" name="preguntaCor" value="" required>
      <label for="pregunta2">Pregunta 2:</label>
      <input type="radio" id="" name="preguntaCor" value="">
      <label for="pregunta3">Pregunta 3:</label>
      <input type="radio" id="" name="preguntaCor" value="">
      <label for="pregunta4">Pregunta 4:</label>
      <input type="radio" id="" name="preguntaCor" value="">
      </div>
      <input type="submit" value="Agregar pregunta">
    </form>
    </div>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/preguntas.js"></script>
</body>
</html>