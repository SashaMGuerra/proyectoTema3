<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 7</title>
        <style>
            span{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
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
    </body>
</html>
