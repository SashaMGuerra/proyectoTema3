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
         * Fecha de última modificación: 20/10/2021.
         * 
         * Timestamp.
         */
        
        $timestamp = 1000212697;
        $fecha = new DateTime(null, new DateTimeZone('America/New_York'));
        $fecha ->setTimestamp($timestamp);
        
        echo 'El timestamp '.$timestamp.' fue '.$fecha->format('d M Y H:i:s').', horario de Nueva York.';
        
        ?>
    </body>
</html>
