<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 9</title>
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
         * Mostrar el path donde se encuentra el archivo actual.
         */
        
        $scriptName= $_SERVER['SCRIPT_FILENAME'];

        echo "El archivo en ejecución está en <span>$scriptName</span>";
        ?>
    </body>
</html>
