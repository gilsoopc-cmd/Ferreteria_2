<?php
$dsn = "pgsql:host=db;port=5432;dbname=ferreteria";
$user = "postgre";
$password = "Cc_34";

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "Conexión exitosa a PostgreSQL";
} catch (PDOException $e) {
    echo "Error en conexión: " . $e->getMessage();
}