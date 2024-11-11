<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 4 a PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $numeros = array(0,1,2,3,4,5,6,7,8,9);
        print_r($numeros);
        echo "<br>";
        /* function para conseguir el factorial de un numero */
        for ($i = 0; $i < 10; $i++) {
            switch ($i) {
                case 0:
                    $factorial[$i] = 1;
                    break;
                case 1:
                    $factorial[$i] = 1;
                    break;
                default:
                    $factorial[$i] = 1;
                    for ($j = 1; $j < $i; $j++){
                        $factorial[$i]=$factorial[$i] * $j;
                    }
            
            }
        }
        for ($i = 0; $i < 10; $i++) {
            echo $factorial[$i];
            echo"<br>";
        }
        
        /* creamos funcion para encontrar un numero en el array usando el metodo DO WHILE */
        $a = array(8,786,45,4,63,89,1478,98);
        $encontrado = FALSE;
        $buscado = 98;
        $i = 0;

        do{
            if ($a[$i] == $buscado) {
                $encontrado = TRUE;
            }
            $i++;
        }while(($i <= 7) && (!$encontrado));
        if ($encontrado) {
            echo "El numero $buscado esta en la lista";
        }else{
            echo "El numero $buscado NO esta en la lista";
        }

    ?>
</body>
</html>