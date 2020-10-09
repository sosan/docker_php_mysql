<?php 
define('DB_HOST','mysql');
define('DB_USER','db_usuario_test');
define('DB_PASS','db_clave_usuario_test');
define('DB_NAME','db_nombre');

try
{
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    echo ".......... Conexion a mysql. borrar ....";
}
catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}
?>