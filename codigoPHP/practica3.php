<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra.
Fecha de creación: 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3-3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        /**
         * Fecha de creación:
         * Fecha de modificación: 18/10/2021.
         * 
         * Muestra de la fecha y hora en castellano.
         */
        
       
        //Cambiados idioma local y timezone.
        //setlocale(LC_ALL, 'es_ES');
        $oFechaHora = new DateTime(null, new DateTimeZone('Europe/Madrid'));
        
        
        //Muestra por pantalla.
        echo 'Hoy es '.$oFechaHora->format('l d/m/Y H:i:s').' en España.';
        echo '<br>Estamos en el año '.$oFechaHora->format('Y');
        echo '<br>Ahora mismo es '.$oFechaHora->getTimestamp().' en timestamp';
        echo '<br>Mañana será '.$oFechaHora->add(new DateInterval('P1D'))->format('l d/m/Y');
        echo '<br>En 20 días será '.$oFechaHora->add(new DateInterval('P20D'))->format('l d/m/Y');
        echo '<br>Hace 2 meses era '.$oFechaHora->sub(new DateInterval('P2M'))->format('l d/m/Y');
        
                /* * Se descargan los locales con dpkg-reconfigure locales
        echo strftime('<div>Hoy es %A %d de %B de %Y.</div>');
        echo strftime('<div>Son las %T</div>');
         * 
         */
        
        ?>
    </body>
</html>
