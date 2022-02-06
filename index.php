<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia Práctica 02 - PHP POO</title>
</head>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: sans-serif;
    }

    div {
        text-align: center;
        width: 100%;
        background: #2666CF;
        color: #fff;
    }

    hr {
        width: 90%;
    }
</style>

<body>
    <div>
        <h1>Evidencia Práctica 02 - PHP POO</h1>
    </div>
    <?php

    include 'clases.php';

    $Persona1 = new Persona('Oscar Manuel Grajales Guzman', 21, false, true);
    $Persona2 = new Persona('Daniel Grajales Guzman', 28, true, false);

    echo '<h2>';
        echo $Persona1->presentarse();
    echo '</h2>';
    echo '<h3>';
        echo $Persona1->dormir();
    echo '</h3>';
    echo '<h3>';
        echo $Persona1->trabajar();
    echo '</h3>';
    echo '<h3>';
        echo $Persona1->estudiar();
    echo '</h3>';
    
    echo '<hr>';
    
    echo '<h2>';
        echo $Persona2->presentarse();
    echo '</h2>';
    echo '<h3>';
        echo $Persona2->dormir();
    echo '</h3>';
    echo '<h3>';
        echo $Persona2->trabajar();
    echo '</h3>';
    echo '<h3>';
        echo $Persona2->estudiar();
    echo '</h3>';

    ?>
</body>
</html>