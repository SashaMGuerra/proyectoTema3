<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES - Ejercicio 3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        setlocale(LC_ALL, 'es_ES');
            date_default_timezone_set('Europe/Madrid');
            $diaSemana = date('l');
            $mes = date('F');
            
            print '<div>';
            echo 'Hoy es ' . $diaSemana . date(' d ') . ' de ' . $mes . ' de '. date('Y').'<br>';
            echo 'Son las '.date('g:i').' de la '.(date('a')=='am'?'mañana':'tarde').'. Estamos en la zona horaria '.date('e');
            print '</div>';
        ?>
    </body>
</html>
