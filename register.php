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
        <input type="text" name="usuario" id="">
        <label for="correo">Correo Electronico:</label>
        <input type="text" name="coreo" id="">
        <label for="password">Palabra Clave:</label>
        <input type="password" name="password" id="">
        <label for="repassword">Repetir Palabra Clave:</label>
        <input type="password" name="repassword" id="">
        <input type="submit" value="Crear Usuario">
    </form>
    </div>
</body>
</html>