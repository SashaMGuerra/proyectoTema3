<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 10</title>
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
             * Mostrar el contenido del fichero actual.
             */
            /* Si con substring:
              $phpSelf = substr(strrchr($_SERVER['PHP_SELF'], '/'), 1);
             * 
             */

            $phpSelf = basename(__FILE__);

            //Muestra por pantalla.
            echo "<div>Este archivo tiene el siguiente código;</div><br>";
            echo highlight_file($phpSelf);
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
