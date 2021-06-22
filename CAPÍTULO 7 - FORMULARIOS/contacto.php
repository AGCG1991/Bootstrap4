<?php

$nombre = $_POST["nombre"];
//Creamos una variable donde se guardará el contenido de lo insertado en el formulario, es recuperado mediante el método POST
echo $nombre;
mail();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form  method="POST" > <!--Método para enviar el mensaje en el cuerpo (mas seguro que el método GET)-->
    <input name="nombre">
    <button type="submit">Enviar </button>
</form>
    
</body>
</html>