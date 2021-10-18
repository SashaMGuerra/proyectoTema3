<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 8</title>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 18/10/2021
         * Fecha de última modificación: 18/10/2021
         * 
         * Mostrar dirección IP del equipo desde el que se accede.
         */
        
        
        $scriptName= $_SERVER['REMOTE_ADDR'];

        echo "Se está accediendo desde <span>$scriptName</span>";
        
        
        ?>
    </body>
</html>
