<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 7</title>
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
             * Mostrar nombre del fichero actual.
             */

            $scriptName= $_SERVER['SCRIPT_NAME'];

            echo "Se está ejecutando el fichero <span>$scriptName</span>.";

            ?>
            
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
    </body>
</html>
