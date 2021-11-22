<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 8</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * Fecha de creación: 18/10/2021
             * Fecha de última modificación: 18/10/2021
             * 
             * Mostrar dirección IP del equipo desde el que se accede.
             */
            $remoteAddr = $_SERVER['REMOTE_ADDR'];
            echo "Se está accediendo desde <span>$remoteAddr</span>";
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>


    </body>
</html>
