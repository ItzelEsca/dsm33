<?php

//Toda la logica
require_once './conexion.php';

function getEstados($conexion, $limit = 2){
    $sql = 'select id, estado from estados order by estado asc limit '.$limit;
    return execute_query_list($conexion, $sql);
}

function getMunicipios($conexion, $limit = 2){
    $sql = 'select id, estado from estados order by estado asc limit '.$limit;
    return execute_query_list($conexion, $sql);
}

function execute_query_list($conexion, $sql){
    $list = $conexion->query($sql, PDO::FETCH_ASSOC);
    return $list;
}

?>
<!-- Vista -->
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear lugar mágico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Crear lugar mágico
                </div>
                <div class="card-body">
                    <form action="lugares-magicos-guarda.php" method="POST">
                        <div class="mb-3">
                            <label for="estado_id" class="form-label">Selecciona estado</label>
                            <select name="estado_id" id="estado_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected value="">Selecciona</option>
                                
                                <?php foreach (getEstados($conexion, 100) as $estado){?>
                                    <option value='<?php echo $estado['id'] ?>'> <?php echo $estado['estado'] ?> </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="municipio_id" class="form-label">Selecciona municipio</label>
                            <select name="municipio_id" id="municipio_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected value="">Selecciona primero un estado</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_lugar" class="form-label">Nombre del lugar</label>
                            <input type="text" name="nombre_lugar" required class="form-control" id="nombre_lugar" aria-describedby="nombre_lugarHelp">
                            <div id="nombre_lugarHelp" class="form-text">Escribe el nombre del lugar mágico.</div>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="estatus1" class="form-label">Estatus</label>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="Activo">
                                    <label class="form-check-label" for="estatus1">
                                        Activo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="Inactivo">
                                    <label class="form-check-label" for="estatus2">
                                        Inactivo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script>
$(function(){
    $('#estado_id').change(function() {
        $.getJSON('municipios.php', {estado_id:$(this).val()}, function(data, textStatus, jqXHR) {
            // console.log(data.data);
            var municipios = $('#municipio_id');
            municipios.html('<option value="">Selecciona</option>')
            data.data.forEach(function (v, i) {
                // console.log(v);
                municipios.append(new Option(v['municipio'], v['id']));
            });
        });
    });
});
</script>
</body>
</html>
