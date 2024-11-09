<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebasphp</title>
</head>
<body>
    <h1>Hola</h1>
    <?php
        $entero = 0;
        $decimal = 0.5;
        $cadena = "hola";
        $cadena2 = "0256";
        $nulo = null;  
        
        echo 'la conversion a boolean de la variable $entero es '.(boolean)$entero;
        echo "<br>";
        echo 'la conversion a boolean de la variable $decimal es '.(boolean)$decimal;
        echo "<br>";
        echo 'la conversion a boolean de la variable $cadena es '.(boolean)$cadena;
        echo "<br>";
        echo 'la conversion a boolean de la variable $cadena2 es '.(boolean)$cadena2;
        echo "<br>";
        echo 'la conversion a boolean de la variable $nulo es '.(boolean)$nulo;
        echo "<br>"; 
    ?>
</body>
</html>