<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES - Ejercicio 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $hilo = 'hola';
        $entero = 9;
        $flotante = 4.5;
        $bool = true;
        
        echo "<h2>Usando echo</h2>";
        echo "<div>La variable ".'$hilo'." tiene un valor de <strong>$hilo</strong> y es de tipo ".gettype($hilo)."</div>";
        echo '<div>La variable $entero tiene un valor de <strong>'.$entero.'</strong> y es de tipo '.gettype($entero).'</div>';
        echo "<div>La variable ".'$flotante'." tiene un valor de <strong>$flotante</strong> y es de tipo ".gettype($flotante)."</div>";
        echo '<div>La variable $bool tiene un valor de <strong>'.$bool.'</strong> y es de tipo '.gettype($bool).'</div>';
        
        print "<h2>Usando print</h2>";
        print "<div>La variable ".'$hilo'." tiene un valor de <strong>$hilo</strong> y es de tipo ".gettype($hilo)."</div>";
        print "<div>La variable ".'$entero'." tiene un valor de <strong>$entero</strong> y es de tipo ".gettype($entero)."</div>";
        print "<div>La variable ".'$flotante'." tiene un valor de <strong>$flotante</strong> y es de tipo ".gettype($flotante)."</div>";
        print "<div>La variable ".'$bool'." tiene un valor de <strong>$bool</strong> y es de tipo ".gettype($bool)."</div>";
                
        printf("<h2>Usando printf</h2>");
        printf("<div>La variable %s tiene un valor de <strong>%s</strong> y es de tipo %s</div>", '$hilo', $hilo, gettype($hilo));
        printf("<div>La variable %s tiene un valor de <strong>%s</strong> y es de tipo %s</div>", '$entero', $entero, gettype($entero));
        printf("<div>La variable %s tiene un valor de <strong>%s</strong> y es de tipo %s</div>", '$flotante', $flotante, gettype($flotante));
        printf("<div>La variable %s tiene un valor de <strong>%s</strong> y es de tipo %s</div>", '$bool', $bool, gettype($bool));
        
        print_r("<h2>Usando print_r</h2>");
        print_r("<div>La variable ".'$hilo'." tiene un valor de <strong>$hilo</strong> y es de tipo ".gettype($hilo)."</div>");
        print_r("<div>La variable ".'$entero'." tiene un valor de <strong>$entero</strong> y es de tipo ".gettype($entero)."</div>");
        print_r("<div>La variable ".'$flotante'." tiene un valor de <strong>$flotante</strong> y es de tipo ".gettype($flotante)."</div>");
        print_r("<div>La variable ".'$bool'." tiene un valor de <strong>$bool</strong> y es de tipo ".gettype($bool)."</div>");
        
        echo ('<h2>Usando var_dump</h2>');
        echo '<div>$hilo:';
        var_dump($hilo);
        echo '</div>';
        echo '<div>$entero:';
        var_dump($entero);
        echo '</div>';
        echo '<div>$flotante:';
        var_dump($flotante);
        echo '</div>';
        echo '<div>$bool:';
        var_dump($bool);
        echo '</div>';
        ?>
    </body>
</html>
