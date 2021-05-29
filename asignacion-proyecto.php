<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Conceptos básicos de PHP</h1>
    <?php
    //variables
    $edad= 18;
    $precio=15.68;
    $valido=true;
    $nombre= "Itzel Escalante";
    $proyectos= [1,'dos',3,'cuatro',5,6,[1,2,3,4,5,6]];
    //echo $proyectos=[1];
    //echo $proyectos[6][2];
    $letras=[
        'vocales'=>['a','e','i','o','u']
        , 'abecedario' => ['a','b','c','d','e','...']
        , 'numeros' => [1,2,3,4,5,6,7,8,9,10]
        , 'numeros_romano_decimal' => [
            'i'=> 1
            ,'ii'=> 2
            ,'iii'=> 3
            ,'iv'=> 4
            ,'v'=> 5
            ,'vi'=> 6
            ,'vii'=> 7
            ,'viii'=> 8
            ,'ix'=> 9
            ,'x'=> 10
        ]
        , 'numeros_decimal_romano' => [
            1=> 'i'
            ,2=> 'ii'
            ,3=> 'iii'
            ,4=> 'iv'
            ,5=> 'v'
            ,6=> 'vi'
            ,7=> 'vii'
            ,8=> 'viii'
            ,9=> 'ix'
            ,10=>'x'
        ]
        ];
        echo $letras['vocales'][1];
        //echo $letras_numeros['numeros_decimal_romano'][9];
    ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>