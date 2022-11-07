<?php

require 'app/controllers/view.controller.php';
require 'app/models/Task.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP09 - Ismael Semmar</title>

    <style>

        .welcome{
            color: white;
            padding: 10px;
            background-color: #ffcf4d;
        }

        .content{
            color: white;
            margin-top: 15px;
            padding: 10px;
            background-color: #ffcf4d;
        }

    </style>
</head>
<body>
    <div class="welcome">
        <h1><?=$greeting;?></h1>
    </div>
    <div class="content">
        <h2>Tasques</h2>
        <table>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>Completed</td>
            </tr>
            <?php
                foreach ($dades as $dada){
                    echo '
                    <tr>
                    <td>'.$dada['id'].'</td>
                    <td>'.$dada['title'].'</td>
                    <td>'.$dada['description'].'</td>
                    <td>'.$dada['completed'].'</td>
                    </tr>   ';
                }
            ?>
        </table>
    </div>
</body>
</html>