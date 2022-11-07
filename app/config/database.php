<?php

$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = '';
$db_name = 'php_laravel';

try{
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e){
    echo $e->getMessage();
}

$sentencia = $db->prepare("SELECT * FROM tasks");
$sentencia->execute();
$dades = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>