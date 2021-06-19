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
    <h1>Asignación de proyectos</h1>
    <?php
    $proyectos = [
        'Hotel para perros'
        , 'Alquiler de equipos de cómputo'
        , 'Renta de autos'
        , 'Venta e Intercambio de Videojuegos'
        , 'Bienes Raíces'
        , 'Cursos de Tecnología para Niños'
        , 'Citas para Estéticas y Barber shop'
        , 'Donación y Acopio de Ropa y Calzado'
        , 'Recolección de desechos tecnológicos'
        , 'Viajes Experienciales'
        , 'Tienda de artículos para mascotas'
        , 'Entregas a domicilio (mandados)'
        , 'Préstamo e intercambio de libros'
        , 'Renta de espacios para oficinas y eventos'
        , 'Organizadores de fiestas infantiles'
        , 'Venta de joyas de segunda mano'
        , 'Renta e Intercambio de juguetes'
        , 'Estancia de persona de la tercera edad' 
    ];
    shuffle($proyectos);
    foreach($proyectos as $indice => $proyecto){
        ++$indice;
        echo "<div>Equipo {$indice}: {$proyecto}</div>";
    }
    ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>