<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3-5</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * @since 18/10/2021.
             * Fecha de última modificación: 22/10/2021.
             * @author Sasha
             * @version 1.0
             * 
             * Estudio del timestamp.
             */
            $oDateTime = new DateTime('2007/07/07 15:15:15', new DateTimeZone('Africa/Addis_Ababa'));

            //Muestra por pantalla del timestamp del datetime.
            echo "<div>El timestamp " . $oDateTime->getTimestamp() . " fue " . $oDateTime->format(DATE_COOKIE) . '</div>';

            //Dado un timestamp, lo transforma en un DateTime en una timezone concreta.
            $iTimestamp = 1000212697;
            $oDateTimestamp = new DateTime(null, new DateTimeZone('America/New_York'));
            $oDateTimestamp->setTimestamp($iTimestamp);
            echo "<div>El timestamp $iTimestamp fue " . $oDateTimestamp->format('d M Y H:i:s') . ', horario de Nueva York.</div>';

            //Cambiada la timezone, la hora mostrada cambia, pero no el timestamp.
            $oDateTimestamp->setTimezone(new DateTimeZone('Europe/Madrid'));
            echo "<div>El timestamp $iTimestamp fue " . $oDateTimestamp->format('d M Y H:i:s') . ', horario de España.</div>';
            ?>
        </main>
            <?php include_once './elementoFooter.php'; // Footer ?>
    </body>
</html>
