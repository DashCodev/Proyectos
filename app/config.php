<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','pa123456');
define('BD','sistema_ventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "La conexión fue exitosa.";
} catch (PDOException $e) {
    print_r($e); // ver error
    //echo "Error al conectar a la base de datos.";
}

$URL= "http://localhost/prueba_tienda";