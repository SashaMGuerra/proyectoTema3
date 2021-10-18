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
         * Fecha de modificación: 18/10/2021.
         * 
         * Muestra de la fecha y hora en Portugal y otros lugares.
         */
        
        //Cambiados idioma local y timezone.
        setlocale(LC_ALL, 'pt_PT');
        date_default_timezone_set('Europe/Lisbon');
        //Muestra por pantalla.
        echo strftime('<div>Ahora es <span>%A</span> %d de %B de %Y en Portugal.</div>');
        echo strftime('<div>Allí son las %T</div>');
        
        echo '<br>';
        
        /**
         * En Marruecos.
         * Si no esta el locale en el servidor (comando locale -a), instalar con
         * locale-gen ar_MA
         * o! con dpkg-reconfigure locales
         */        
        setlocale(LC_ALL, 'ar_MA.utf8');
        date_default_timezone_set('Africa/Casablanca');
        //Muestra por pantalla.
        echo strftime('<div>Ahora es <span>%A</span> %d de %B de %Y en Marruecos.</div>');
        echo strftime('<div>Allí son las %T</div>');
        
        echo '<br>';
        
        //Colombia;
        setlocale(LC_ALL, 'es_CO');
        date_default_timezone_set('America/Bogota');
        //Muestra por pantalla.
        echo strftime('<div>Ahora es <span>%A</span> %d de %B de %Y en Colombia.</div>');
        echo strftime('<div>Allí son las %T</div>');
        
        echo '<br>';
        
        //Hawaii;
        setlocale(LC_ALL, 'en_US');
        date_default_timezone_set('Pacific/Honolulu');
        //Muestra por pantalla.
        echo strftime('<div>Ahora es <span>%A</span> %d de %B de %Y en Hawaii.</div>');
        echo strftime('<div>Allí son las %T</div>');
        
        
        ?>
    </body>
</html>
