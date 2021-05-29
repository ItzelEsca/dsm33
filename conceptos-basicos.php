<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos básicos de PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Conceptos básicos de PHP</h1>
    <?php
    date_default_timezone_set('America/Mexico_City');
    echo '<h2>¡Hola Mundo!</h2>';
    echo date(DATE_RSS) .'<br>';
    $hora = date('G');
    if($hora < 12) {
        echo '<h3>¡Buenos días!</h3>';
    } elseif ($hora <= 19) {
        echo '<h3>¡Buenas tardes!</h3>';
    } else {
        echo '<h3>¡Buenas noches, dulces sueños!</h3>';
    }
    switch (date('N')) {
        case 1://lunes
            $mensaje = '¡Ánimo, que tengas una excelente semana de trabajo!';
            break;
        case 2://martes
            $mensaje = '¡Ánimo,ya pasó eldía más díficil!';
            break;
        case 3://miercoles
            $mensaje = '¡Ánimo, ombligo de la semana!';
            break;
        case 4://jueves
            $mensaje = '¡Ánimo,juebebeeees!';
            break;
        case 5://viernes
            $mensaje = '¡Ánimo,Vierneeeeeeees!';
            break;
        case 6://sabado
            $mensaje = '¡Ánimo,disfruta tu fin de semana!';
            break;
        case 7://domingo
            $mensaje = '¡Ánimo, descansa mañana inicias de nuevo!';
            break;
    }
    echo "<p>{$mensaje}</p>"
    ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>