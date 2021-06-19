<?php
require_once('./vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

$dns = 'mysql:host=' . $_ENV['BD_HOST'] . ':' . $_ENV['BD_PUERTO'] . ';dbname=' . $_ENV['BD_NOMBRE'];
$nombre_usuario = $_ENV['BD_USUARIO'];
$contrasena = $_ENV['BD_CONTRASENA'];
$opciones = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
    , PDO::ATTR_EMULATE_PREPARES => false
    , PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

print_r($dns);

//$conexion = null;

try{
  $conexion = new PDO($dns, $nombre_usuario, $contrasena, $opciones);
}catch(Exception $exception)
{
  echo $exception;
}


// inserción
// $sql = <<<fin
// insert into usuarios (
//     nombre
//     , primer_apellido
//     , segundo_apellido
//     , sexo
//     , fecha_nacimiento
//     , numero_celular
//     , correo_electronico
//     , contrasena
//     , perfil
//     , estatus
// )
// values
// (
//     :nombre
//     , :primer_apellido
//     , :segundo_apellido
//     , :sexo
//     , :fecha_nacimiento
//     , :numero_celular
//     , :correo_electronico
//     , :contrasena
//     , :perfil
//     , :estatus
// );
// fin;

// /*
// PDO::PARAM_BOOL: Representa un tipo de dato booleano.
// PDO::PARAM_NULL: Representa el tipo de dato NULL de SQL.
// PDO::PARAM_INT: Representa el tipo de dato INTEGER de SQL.
// PDO::PARAM_STR: Representa el tipo de dato CHAR, VARCHAR de SQL, u otro tipo de datos de cadena.

// bindParam: cuando es una variable
// bindValue: cuando es un valor
// */

// $sentencia = $conexion->prepare($sql);
// $sentencia->bindValue(':nombre', 'Benito Pablo', PDO::PARAM_STR);
// $sentencia->bindValue(':primer_apellido', 'Juárez', PDO::PARAM_STR);
// $sentencia->bindValue(':segundo_apellido', 'García', PDO::PARAM_STR);
// $sentencia->bindValue(':sexo', 'Masculino', PDO::PARAM_STR);
// $sentencia->bindValue(':fecha_nacimiento', '1806-03-21', PDO::PARAM_STR);
// $sentencia->bindValue(':numero_celular', '1234567890', PDO::PARAM_STR);
// $sentencia->bindValue(':correo_electronico', 'benito.pablo@correo.com', PDO::PARAM_STR);
// $sentencia->bindValue(':contrasena', password_hash('12345678', PASSWORD_BCRYPT, ['cost' => 12]), PDO::PARAM_STR);
// $sentencia->bindValue(':perfil', 'Administrador', PDO::PARAM_STR);
// $sentencia->bindValue(':estatus', 'Activo', PDO::PARAM_STR);
// $sentencia->execute();
// echo 'Realizado';

// // actualización
// $sql = <<<fin
// update usuarios set
//     nombre = :nombre
//     , primer_apellido = :primer_apellido
//     , segundo_apellido = :segundo_apellido
//     , sexo = :sexo
//     , fecha_nacimiento = :fecha_nacimiento
//     , numero_celular = :numero_celular
//     , correo_electronico = :correo_electronico
//     , contrasena = :contrasena
//     , perfil = :perfil
//     , estatus = :estatus
// where id = :id;
// fin;

// $sentencia = $conexion->prepare($sql);
// $sentencia->bindValue(':nombre', 'Benito Pablo mod', PDO::PARAM_STR);
// $sentencia->bindValue(':primer_apellido', 'Juárez mod', PDO::PARAM_STR);
// $sentencia->bindValue(':segundo_apellido', 'García mod', PDO::PARAM_STR);
// $sentencia->bindValue(':sexo', 'Masculino', PDO::PARAM_STR);
// $sentencia->bindValue(':fecha_nacimiento', '1806-03-22', PDO::PARAM_STR);
// $sentencia->bindValue(':numero_celular', '456789132', PDO::PARAM_STR);
// $sentencia->bindValue(':correo_electronico', 'benito.pablo@nuevo.com', PDO::PARAM_STR);
// $sentencia->bindValue(':contrasena', password_hash('4567891', PASSWORD_BCRYPT, ['cost' => 12]), PDO::PARAM_STR);
// $sentencia->bindValue(':perfil', 'Cliente', PDO::PARAM_STR);
// $sentencia->bindValue(':estatus', 'Inactiva', PDO::PARAM_STR);
// $sentencia->bindValue(':id', 1, PDO::PARAM_INT);
// $sentencia->execute();
// echo 'Realizado';

// // consultar un sólo registro
// $sql = <<<fin
// select
//     id
//     , nombre
//     , primer_apellido
//     , segundo_apellido
//     , sexo
//     , fecha_nacimiento
//     , numero_celular
//     , correo_electronico
//     , contrasena
//     , perfil
//     , estatus
// from usuarios
//     where id = :id
// fin;
// $sentencia = $conexion->prepare($sql);
// $sentencia->bindValue(':id', 1, PDO::PARAM_INT);
// $sentencia->execute();
// $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($usuario);
// echo '</pre>';