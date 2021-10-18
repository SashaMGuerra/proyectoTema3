<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3-5</title>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 18/10/2021.
         * Fecha de última modificación: 18/10/2021.
         * 
         * Estudio del timestamp.
         */
        
        $fecha = new DateTime('2001-09-11 08:51:37', new DateTimeZone('America/New_York'));
        echo $fecha->format('U = d M Y H:i:s').', horario de Nueva York';
        
        ?>
    </body>
</html>
