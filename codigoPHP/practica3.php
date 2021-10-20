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
        <style>
            span{
                font-weight: bold;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación:
         * Fecha de modificación: 20/10/2021.
         * 
         * Prueba con la clase DateTime.
         */
        
        //setlocale(LC_ALL, 'es_ES');
                /* * Se descargan los locales con dpkg-reconfigure locales
        echo strftime('<div>Hoy es %A %d de %B de %Y.</div>');
        echo strftime('<div>Son las %T</div>');
       
        /* Construcción de un objeto DateTime*/
        
        $oFechaHora = new DateTime(null, new DateTimeZone('Europe/Madrid'));
                
        /* Uso de los métodos de la clase*/
        
        echo '<h1>Mostrado y operaciones con fechas</h1>';
        // format muestra la fecha formateada.
        echo '<div>Hoy es '.$oFechaHora->format('l d/m/Y H:i:s').' en España.</div>';
        echo '<div>Estamos en el día '.$oFechaHora->format('z').' del año '.$oFechaHora->format('Y').'.</div>';
        
        // add suma un intervalo de tiempo.
        echo '<div>Mañana será '.$oFechaHora->add(new DateInterval('P1D'))->format('jS F y').'.</div>';
        
        // sub resta un intervalo de tiempo.
        echo '<div>Hace 2 meses y media hora era '.$oFechaHora->sub(new DateInterval('P2M1D PT30M'))->format('jS F y h:i:sa').'..</div>';
        
        // diff devuelve un intervalo entre dos fechas.
        $oFechaDiff = $oFechaHora->diff(new DateTime('1-1-2002'));
        echo '<div>El euro comenzó a circular en España hace '.$oFechaDiff->format('%y años, %m y %d días').'.</div>';
        
        // Prueba con atributo estático de DateTime:
        echo "<div>En las cookies de HTTP, las fecha-horas tienen un formato establecido: ".$oFechaHora->format(DATE_COOKIE)."</div>";
        
        
        echo '<h1>Cambio de fecha</h1>';
        
        // modify altera la marca temporal, dada una cadena de fecha y hora.
        $oFechaHora->modify('7-9-2007 12:37:41');
        echo '<div>Se ha cambiado la fecha y hora a '.$oFechaHora->format(DateTime::RFC850).'</div>';
        
        // setTimestamp altera la marca temporal, dada ésta.
        $sTimestamp = 1234567890;
        $oFechaHora->setTimestamp($sTimestamp);
        echo "<div>El timestamp $sTimestamp fue ".$oFechaHora->format(DATE_RFC3339_EXTENDED).' en España.</div>';
        
        // setTimezone cambia el DateTimeZone, dado un objeto de esta clase.
        $oFechaHora->setTimezone(new DateTimeZone('Pacific/Majuro'));
        echo "<div>El timestamp $sTimestamp fue ".$oFechaHora->format(DATE_RFC3339_EXTENDED).' en las islas Marshall.</div>';
        
        // setDate cambia el año, mes y día (no la hora).
        // setTime cambia la hora.
        $oFechaHora->setDate(1999, 12, 31)->setTime(9, 9);
        echo '<div>Se ha cambiado la fecha a '.$oFechaHora->format(DateTime::RFC850).'</div>';
        
        
        echo '<br>';
        /* createFromFormat es un método estático que crea un objeto DateTime
         * dado un formato.
         */
        $sFechaRara = 'May - 15, 21';
        $oFechaHoraFormateada = DateTime::createFromFormat('M - j, y', $sFechaRara);
        echo "<div>Se ha introducido <span>$sFechaRara</span>: ".$oFechaHoraFormateada->format('d-g-Y').'</div>';
        
        //Muestra por pantalla.
        echo '<br>Ahora mismo es '.$oFechaHora->getTimestamp().' en timestamp';
        echo '<br>En 20 días será '.$oFechaHora->add(new DateInterval('P20D'))->format('l d/m/Y');
        
        
        
        ?>
    </body>
</html>
