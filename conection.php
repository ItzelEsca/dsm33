<?php
require_once('./vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

// Include the Simple ORM class
include 'SimpleOrm.class.php';

// Connect to the database using mysqli
$conn = new mysqli($_ENV['BD_HOST'], $_ENV['BD_USUARIO'], $_ENV['BD_CONTRASENA']);

if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// Tell Simple ORM to use the connection you just created.
SimpleOrm::useConnection($conn, $_ENV['BD_NOMBRE']);

class Estados extends SimpleOrm {
  protected static
      $database = $_ENV['BD_NOMBRE'],
      $table = 'estados',
      $pk = 'id';
}

print(Estados::all());

?>
