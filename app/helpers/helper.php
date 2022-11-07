<?php

require 'app/config/database.php';

function saludar(){
    if($_GET["nom"] != null)
        $name = htmlspecialchars($_GET["nom"]);
    if($_GET["cognom"] != null)
        $surname = htmlspecialchars($_GET["cognom"]);
    if($name && $surname == null)
        $fullname = $name;
    else if($name && $surname)
        $fullname = $name . " " . $surname;
    else $fullname = 'Anonymous';
    return 'Hola, ' . $fullname . '!';
}

function taula_tasques(){
    global $db;
    $sentencia = $db->prepare("SELECT * FROM tasks");
    $sentencia->execute();
    $dades = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    $taula = '<table>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Description</td>
                    <td>Completed</td>
                </tr>';
    foreach ($dades as $dada){
        $taula = $taula . '
        <tr>
        <td>'.$dada['id'].'</td>
        <td>'.$dada['title'].'</td>
        <td>'.$dada['description'].'</td>
        <td>'.parse_boolean($dada['completed']).'</td>
        </tr>   ';
    }
    $taula = $taula . '</table>';
    return $taula;
}

function parse_boolean($valor){
    if($valor == 0) return 'No';
    else return 'Si';
}