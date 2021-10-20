<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra.
Fecha de creación: 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3-4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            span{
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación:
         * Fecha de modificación: 20/10/2021.
         * 
         * Muestra de la fecha y hora en Portugal y otros lugares.
         */
        
        $oFechaHora = new DateTime();
        $oTimezone = new DateTimeZone('Europe/Lisbon');
        $oFechaHora ->setTimezone($oTimezone);
        echo $oFechaHora->format('l d/m/Y H:i:s').' en Portugal.';
        
        echo '<br>';
        
        $oTimezone = new DateTimeZone('Africa/Casablanca');
        $oFechaHora ->setTimezone($oTimezone);
        echo $oFechaHora->format('l d/m/Y H:i:s').' en Marruecos.';
        
        echo '<br>';
        
        $oTimezone = new DateTimeZone('America/Bogota');
        $oFechaHora ->setTimezone($oTimezone);
        echo $oFechaHora->format('l d/m/Y H:i:s').' en Colombia.';
        
        ?>
    </body>
</html>
