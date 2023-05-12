<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <div id="contForm">
    <h1>Registro</h1>
        <form action="altaUsuarios.php">
        <label for="usuario">Nombre Usuario:</label>
        <input type="text" name="usuario" id="nomUsu">
        <label for="correo">Correo Electronico:</label>
        <input type="text" name="coreo" id="corElec">
        <label for="password">Palabra Clave:</label>
        <input type="password" name="password" id="pass1">
        <label for="repassword">Repetir Palabra Clave:</label>
        <input type="password" name="repassword" id="pass2">
        <input type="submit" value="Crear Usuario" id="registrar">
    </form>
    </div>
</body>
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/registro.js"></script>
</html>