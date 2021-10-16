<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES - Ejercicio 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            date_default_timezone_set('Europe/Madrid');
            $diaSemana = date('N');
            $mes = date('m');
            switch ($diaSemana) {
                case 1:
                    $diaSemana = 'lunes';
                    break;
                case 2:
                    $diaSemana = 'martes';
                    break;
                case 3:
                    $diaSemana = 'miércoles';
                    break;
                case 4:
                    $diaSemana = 'jueves';
                    break;
                case 5:
                    $diaSemana = 'viernes';
                    break;
                case 6:
                    $diaSemana = 'sábado';
                    break;
                case 7:
                    $diaSemana = 'domingo';
                    break;
            }

            switch ($mes) {
                case 1:
                    $mes = 'enero';
                    break;
                case 2:
                    $mes = 'febrero';
                    break;
                case 3:
                    $mes = 'marzo';
                    break;
                case 4:
                    $mes = 'abril';
                    break;
                case 5:
                    $mes = 'mayo';
                    break;
                case 6:
                    $mes = 'junio';
                    break;
                case 7:
                    $mes = 'julio';
                    break;
                case 8:
                    $mes = 'agosto';
                    break;
                case 9:
                    $mes = 'septiembre';
                    break;
                case 10:
                    $mes = 'octubre';
                    break;
                case 11:
                    $mes = 'noviembre';
                    break;
                case 12:
                    $mes = 'diciembre';
                    break;
            }
            
            print '<div>';
            echo 'Hoy es ' . $diaSemana . date(' d ') . ' de ' . $mes . ' de '. date('Y').'<br>';
            echo 'Son las '.date('g:i').' de la '.(date('a')=='am'?'mañana':tarde).'. Estamos en la zona horaria '.date('e');
            print '</div>';
        ?>
    </body>
</html>
