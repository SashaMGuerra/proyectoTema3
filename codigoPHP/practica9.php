<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 9</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * @since 18/10/2021
             * Fecha de última modificación: 18/10/2021
             * 
             * Mostrar el path donde se encuentra el archivo actual.
             */

            $scriptName= $_SERVER['SCRIPT_FILENAME'];

            echo "El archivo en ejecución está en <span>$scriptName</span>";
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
    </body>
</html>
