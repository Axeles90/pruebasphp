<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Practica 4 B PHP</title>
</head>
<body>
    <?php
    /*funcion para escribir una loteria donde elegimos nosotros el resultado de 1,X o 2 */
       $quiniela = array(
        "partido1" => array(TRUE,TRUE,FALSE),
        "partido2" => array(TRUE,FALSE,FALSE),
        "partido3" => array(FALSE,TRUE,FALSE),
        "partido4" => array(FALSE,TRUE,FALSE),
        "partido5" => array(TRUE,FALSE,FALSE),
        "partido6" => array(TRUE,FALSE,TRUE),
        "partido7" => array(FALSE,FALSE,TRUE),
        "partido8" => array(TRUE,TRUE,FALSE),
        "partido9" => array(FALSE,TRUE,TRUE),
        "partido10" => array(TRUE,TRUE,TRUE),
        "partido11" => array(TRUE,FALSE,TRUE),
        "partido12" => array(FALSE,FALSE,TRUE),
        "partido13" => array(TRUE,FALSE,TRUE),
        "partido14" => array(TRUE,FALSE,FALSE),
        "pleno15" => array(TRUE,TRUE,FALSE)
       )
    ?>

    <?php
        echo"<p>Su apuesta:</p>";
        foreach($quiniela as $clave => $valor){
            echo "$clave: ";
            if($valor[0])
                echo "<b>1</b>";
            if($valor[1])
                echo "<b>X</b>";
            if($valor[2])
                echo "<b>2</b>";
            echo "<br>";
        }
    ?>
</body>
</html>