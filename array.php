<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad1: PHP</title>
</head>
<body>
    
</body>
</html>

<?php

# Crear un programa en PHP en el cual muestre nombre, apellido, edad, hobbie, editor de código preferido, sistema operativo
$array = ["Daiana","Ryan","35","Teatro","Visual Studio Code"];
echo "<br>";

# Publicar Nombre y Apellido
echo "<h3>".$array[0]." ".$array[1]."</h3>";
echo "<hr>";

# Publicar la Edad
$anios = "<span><b>Edad: </b></span>";
echo "<p>".$anios." "."<i>".$array[2]." años </i> </p>";

# Publicar Hobbie
$text = "<span><b>Hobbie: </b></span>";
echo "<p>".$text." "."<i>".$array[3]."</i></p>";

# Publicar la Editor de Código
$code = "<span><b>Editor de Código: </b></span>";
echo "<p>".$code." "."<i>".$array[4]."</i></p>";

//echo PHP_OS;
$system = "<span><b>Sistema Operativo: </b></span>";
echo "<p>".$system." "."<i>".PHP_OS."</i></p>";
?>