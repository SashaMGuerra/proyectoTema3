<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 10</title>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 18/10/2021
         * Fecha de última modificación: 18/10/2021
         * 
         * Mostrar el contenido del fichero actual.
         */
        
        /*Si con substring:
        $phpSelf = substr(strrchr($_SERVER['PHP_SELF'], '/'), 1);
         * 
         */
        
        $phpSelf = basename(__FILE__);
        
        //Muestra por pantalla.
        echo "<div>Este archivo tiene el siguiente código;</div><br>";
        echo highlight_file($phpSelf);
        ?>
    </body>
</html>
