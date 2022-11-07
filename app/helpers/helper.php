<?php

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

function parse_boolean($valor){
    if($valor == 0) return 'No';
    else return 'Si';
}