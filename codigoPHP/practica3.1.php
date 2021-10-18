<?php
// Sacar el timestamp
// Se convierte a la zona horaria



//Creación de un objeto DateTime de zona Europa/Madrid.
$oFechaHoraActual = new DateTime(null, new DateTimeZone('Europe/Madrid'));
$oFechaHoraActual ->setTimezone('Europe/Madrid');

//setlocale(LC_ALL, 'es_ES', 'Spanish_Spain', 'Spanish');
//date_default_timezone_set('Europe/Madrid');


echo date_default_timezone_get();