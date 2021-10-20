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
         * Muestra de la fecha y hora en otros lugares en su idioma.
         */
        
        /*
         * Para configurar locales em el servidor se utiliza el comando
         * dpkg-reconfigure locales
         * Es necesario reiniciar el servidor.
         */
        setlocale(LC_ALL, 'pt_PT');
        date_default_timezone_set('UTC');
        
        $oDateTimeActual = new DateTime();
        
        echo '<h1>Mediante la clase IntlDateFormatter</h1>';
        
        /*
         * En el constructor de la clase, si se deja el primer valor a null,
         * toma por defecto el valor del locale.
         * 
         * No es necesario, pero como cuarto parámetro se le puede dar una zona horaria,
         * toma por defecto el valor del default timezone.
         */
        
        //Portugal.
        $oFormatterPT = new IntlDateFormatter(null, IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Europe/Lisbon');
        //Se le puede dar un formato con setPattern.
        $oFormatterPT->setPattern('EEEE d MMMM Y G - H:mm:ss z');
        echo '<div>En Portugal es '.$oFormatterPT->format($oDateTimeActual).'.</div>';
        
        //Marruecos.
        $oFormatterMA = new IntlDateFormatter('ar_MA', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Africa/Casablanca', null, 'EEEE d/MMM/Y - H:mm:ss VV');
        echo '<div>En Marruecos es '.$oFormatterMA->format($oDateTimeActual).'.</div>';
        
        //Colombia.
        $oFormaterCO = IntlDateFormatter::create('es_CO', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        //Se puede cambiar el timezone con su método.
        $oFormaterCO->setTimezone('America/Bogota');
        echo '<div>En Colombia es '.$oFormaterCO->format($oDateTimeActual).'.</div>';
        
        
        echo '<h1>Mediante el método strftime</h1>';
        
        /*
         * El método strftime formatea una fecha con el formato dado,
         * respetando la configuración local.
         */
        //Portugal.
        date_default_timezone_set('Europe/Lisbon');
        echo '<div>En Portugal es '. strftime('%A %e-%h, semana %V del año %y, hora local %k:%M').'.</div>';
        
        //Marruecos.
        date_default_timezone_set('Africa/Casablanca');
        setlocale(LC_ALL, 'ar_MA.utf8');
        echo '<div>En Marruecos es '. strftime('%u - %B - %Y. Son las %R').'.</div>';
        
        //Colombia.
        date_default_timezone_set('America/Bogota');
        setlocale(LC_ALL, 'es_CO.utf8');
        echo '<div>En Colombia es '. strftime('%c').'.</div>';
        
        
        
        ?>
    </body>
</html>
