<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 19/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 13</title>
        <style>
            h1, h2{
                text-align: center;
            }
            table{
                border-collapse: collapse;
            }
            td, th{
                border: 1px solid gainsboro;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 19/10/2021
         * Fecha de última modificación: 20/10/2021
         * 
         * Función que cuenta el número de visitas a la página desde una fecha
         */
        
        $sArchivo = 'prueba.txt';
        $oArchivoAbierto = fopen($sArchivo, 'x+');
        fwrite($oArchivoAbierto, 'más');
        $sRead = fread($oArchivoAbierto, filesize($sArchivo));
        fclose($oArchivoAbierto);
        
        echo $sRead;
        ?>
    </body>
</html>
