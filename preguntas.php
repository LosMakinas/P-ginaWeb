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
  <img src="images/logo-definitivo.png" alt="img Logo" id="logoClick">
  <div id="hamburgesa">
    <img src="images/logo-definitivo.png" alt="img Logo" id="logo">
    <div id="enlaces">
      <a href="index.php">Home</a>
      <a href="index.php">Crear Pregunta</a>
      <a href="login.php">Login</a>
      <a href="register.php">Registro</a>
    </div>
  </div>
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
    <footer>

    </footer>
    </div>
</body>
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/addPregunta.js"></script>
</html>