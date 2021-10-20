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
         * Estudio de la clase DateTime.
         */
        /* Construcción de un objeto DateTime*/
        $oFechaHora = new DateTime(null, new DateTimeZone('Europe/Madrid'));
                
        /* Uso de los métodos de la clase*/
        
        echo '<h1>Mostrado y operaciones con fechas</h1>';
        // format muestra la fecha formateada.
        echo '<div>Hoy es '.$oFechaHora->format('l d/m/Y H:i:s').' en España.</div>';
        echo '<div>Estamos en el día '.$oFechaHora->format('z').' del año '.$oFechaHora->format('Y').'.</div>';
        
        /* add suma un intervalo de tiempo.
         * Se tiene que crear un nuevo objeto DateTime porque si no modifica el
         * que se ha usado hasta aquí.
         */
        $oFechaAdd = new DateTime();
        echo '<div>Mañana será '.$oFechaAdd->add(new DateInterval('P1D'))->format('jS F y').'.</div>';
        
        
        // sub resta un intervalo de tiempo.
        $oFechaSub = new DateTime();
        echo '<div>Hace 2 meses y media hora era '.$oFechaSub->sub(new DateInterval('P2M PT30M'))->format('jS F y h:i:sa O').'.</div>';
        
        // diff devuelve un DateInterval entre dos fechas.
        $oFechaDiff = $oFechaHora->diff(new DateTime('2002-01-01'));
        echo '<div>El euro comenzó a circular en España hace '.$oFechaDiff->format('%y años, %m meses y %d días (%a días)').'.</div>';
        
        // Prueba con atributo estático de DateTime:
        echo "<div>En las cookies de HTTP, las fecha-horas tienen un formato establecido: ".$oFechaHora->format(DateTime::COOKIE)."</div>";
        
        /* createFromFormat es un método estático que crea un objeto DateTime
         * dado un formato.
         */
        $sFechaRara = 'May - 15, 21';
        $oFechaHoraFormateada = DateTime::createFromFormat('M - j, y', $sFechaRara);
        echo "<div>Se ha introducido <span>$sFechaRara</span>: ".$oFechaHoraFormateada->format('d-g-Y').'</div>';
        
        
        
        echo '<h1>Cambio de fecha</h1>';
        
        // modify altera la marca temporal, dada una cadena de fecha y hora.
        $oFechaHora->modify('7-9-2007 12:37:41');
        echo '<div>Se ha modificado la fecha y hora a '.$oFechaHora->format(DateTime::RFC850).'</div>';
        
        // getTimestamp devuelve la marca temporal de una fecha dada.
        echo '<div>Su timestamp es '.$oFechaHora->getTimestamp().'.</div>';
        
        // setTimestamp altera la marca temporal, dada ésta.
        $sTimestamp = 1234567890;
        $oFechaHora->setTimestamp($sTimestamp);
        echo "<div>El timestamp $sTimestamp fue ".$oFechaHora->format(DATE_RFC822).' en España.</div>';
        
        // setTimezone cambia el DateTimeZone, dado un objeto de esta clase.
        $oFechaHora->setTimezone(new DateTimeZone('Pacific/Majuro'));
        echo "<div>El timestamp $sTimestamp fue ".$oFechaHora->format(DATE_RFC822).' en las islas Marshall, por lo que su zona horaria es '.$oFechaHora->getTimezone()->getName().'.</div>';
        
        /*
         * setDate cambia el año, mes y día (no la hora).
         * setTime cambia la hora.
         */
        $oFechaHora->setDate(1999, 12, 31)->setTime(9, 9);
        echo '<div>Se ha cambiado la fecha a '.$oFechaHora->format('dS.m.Y h:i P').'</div>';
        
        
        
        
        echo '<h1>Fecha-hora en otros idiomas</h1>';
        
        /**
         * Se necesita instalar en el servidor la clase IntlDateFormatter
         * mediante el comando apt-get install php7.4-intl
         * Ni siquiera necesita que el servidor tenga instalado el idioma
         * Dirección de la ayuda: https://www.php.net/manual/es/intl.installation.php
         */
        $oFechaHoraGreenwich = new DateTime(null, new DateTimeZone('UTC'));
        $oFormatter = new IntlDateFormatter('it_IT', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        echo '<div>Full fecha-hora internacional en italiano: '.$oFormatter->format($oFechaHoraGreenwich).'</div>';
        
        /*
         * Hay funciones de fecha/hora que no están dentro de la clase DateTime
         * 
         * Por ejemplo, si se quiere indicar un locale y sacar una fecha-hora
         * en el idioma, se necesita que el idioma esté activado en el servidor
         * y formatear la fecha-hora con strftime
         */
        
        date_default_timezone_set('Europe/Madrid');
        setlocale(LC_ALL, 'es_ES.utf8');
        echo '<div>Fecha-hora actual con strftime en español: '.strftime('%A %d de %B de %Y, son las %T').'</div>';
        
        ?>
    </body>
</html>
