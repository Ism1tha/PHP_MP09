<?php
require 'app/config/database.php';

function saludar(){
    if($_GET["nom"] != null)
        $name = htmlspecialchars($_GET["nom"]);
    else $name = 'Anonymous';
    return 'Hola, ' . $name . '!';
}

$greeting = saludar();