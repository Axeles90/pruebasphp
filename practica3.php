<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebasphp</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Hola</h1>
    <?php
        $entero = 0;
        $decimal = 0.5;
        $cadena = "hola";
        $cadena2 = "0256";
        $nulo = null;  
        
        echo "la conversion a boolean de la variable $entero es ".(boolean)$entero;
        echo "<br>";
        echo "la conversion a boolean de la variable $decimal es ".(boolean)$decimal;
        echo "<br>";
        echo "la conversion a boolean de la variable $cadena es ".(boolean)$cadena;
        echo "<br>";
        echo "la conversion a boolean de la variable $cadena2 es ".(boolean)$cadena2;
        echo "<br>";
        echo "la conversion a boolean de la variable $nulo es 2".(boolean)$nulo;
        echo "<br>"; 

        $arr = [0,1,2,3,4,5];
       /* shuffle($arr);  /* ordenar de forma aleatoria el array */
        print_r($arr); /*para imprimir el array */
        $arr2 = ["prueba" => "correcta"]; /* se puede usar como diccionario tambien */
        print_r($arr2);
        print_r($arr2['prueba']); /* podemos imprimir el valor buscando simplemente la palabra en lugar de buscar la posicion */

        echo '<br>';
        for ($i = 0; $i <= 5 ; $i++){  /* el bucle se usaria con FOR, creando la variable $i, eligiendo la condicion y luego haciendo que $i vaya sumando uno */
            echo "$i";
        }
        echo "<br>";    
        /* hay otras forma de realizar bucles con WHILE o DO WHILE */
        $suma = 0;
        $i2 = 0;

        while ($i2 < 5){
            $suma += $arr[$i2];
            $i2++;
        }
        echo "la suma del array es $suma";
        echo "<br>";
        /* para realizar opciones con if, tenemos opcion de realizarlo mas facil con la funcion SWITCH */

        $dia = 1;
                            /* Muy importante el BREAK en casa CASE porque sino seguiria ejecutando hasta el final */
        switch ($dia) {
            case 1:
                $resultado = "Lunes";
                break;
            case 2:
                $resultado = "Martes";
                break;
            case 3:
                $resultado = "Miercoles";
                break;
            case 4:
                $resultado = "Jueves";
                break;
            case 5:
                $resultado = "Viernes";
                break;
            case 6:
                $resultado = "Sabado";
                break;
            case 7:
                $resultado = "domingo";
                break;
            default:        /* con DEFAULT indicamos que tiene que hacer cuando ninguna condicion se cumple */
            $resultado = "dia incorrecto";
        }
        echo "<p>El dia de la semana es <b>$resultado<b><p>";
        echo "<br>";

        $lista = array(5,8,12,65,48,75,32,22,333);
        /* aqui realizamos una funcion para encontrar el numero 32 en la lista y comprobar si esta o no */
        $numero = 12;
        $encontrado = FALSE;
        for ($i = 0; $i < 9; $i++){
            if ($lista[$i] == $numero){
                $encontrado = TRUE;
                break;
            }
        }
        if ($encontrado){
            echo "El numero $numero se encuentra en la lista";
        }else{
            echo "El numero $numero NO esta en la lista";
        }
        echo "<br>";

        $monedas = array(
            "España" => "Euro",
            "Francia" => "Euro",
            "Reino unido"=> "Libra",
            "Usa"=> "Dolar",
            "Argentina"=> "Peso",
        )

    ?>
    
        <table>
            <tr>
                <th>Pa&iacute;s</th>
                <th>Moneda</th>
            </tr>
        
        <?php
        /* aqui hacemos que por cada PAIS(clave)>MONEDA(valor) que haya en el array MONEDAS, imprima una columna y una fila de una tabla */
            foreach( $monedas as $clave => $valor ){
                echo "<tr>";
                echo "<td>$clave</td>";
                echo "<td>$valor</td>";
                echo "</tr>";
            }
        ?>
           
        </table>

</body>
</html>