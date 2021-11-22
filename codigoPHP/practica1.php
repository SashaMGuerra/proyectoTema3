<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra.
Fecha de creación: 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3-1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * Fecha de creación:
             * Fecha de modificación: 26/10/2021.
             * @author Sasha
             * @version 1.0
             * 
             * Estudio de las diferencias entre las distintas funciones para
             * imprimir por pantalla.
             */
            /*
             * Inicialización de un string, un entero, un float, un booleano y un array.
             * En la primera letra del nombre de la variable se indica su tipo.
             */

            $bBool = true;
            $sHilo = 'soy un string';
            $iEntero = 21;
            $fFlotante = 4.5;
            $aArray = array($sHilo, $iEntero, $fFlotante, $bBool);

            // echo muestra cadenas. No es una función.
            echo "<h2>Usando echo</h2>";
            /*
             * Dentro de las comillas simples, las variables no se leen,
             * tienen que ponerse fuera del string.
             * 
             * Las funciones se escriben fuera del string.
             * gettype devuelve el tipo de la función.
             */
            echo '<div>La variable $bBool tiene un valor de <strong>' . $bBool . '</strong> y es de tipo ' . gettype($bBool) . '</div>';
            /*
             * Dentro de las comillas dobles, las variables se leen.
             * Las funciones deben colocarse fuera del string.
             * 
             * Se pueden combinar comillas simples y dobles en un solo echo.
             */
            echo "<div>La variable " . '$iEntero' . " tiene un valor de <strong>$iEntero</strong> y es de tipo " . gettype($iEntero) . "</div>";
            echo "<div>La variable " . '$fFlotante' . " tiene un valor de <strong>$fFlotante</strong> y es de tipo " . gettype($fFlotante) . '</div>';
            /*
             * Se pueden leer comillas dentro de comillas pero tienen que
             * ser diferentes.
             * El contenido puede ir entre paréntesis, como en una función.
             */
            echo('<div>La variable $sHilo tiene un valor de "<strong>' . $sHilo . '</strong>" y es de tipo ' . gettype($sHilo) . '</div>');

            // print imprime cadenas. Funciona del mismo modo que echo.
            print "<h2>Usando print</h2>";
            print '<div>La variable $bBool tiene un valor de <strong>' . $bBool . '</strong> y es de tipo ' . gettype($bBool) . '</div>';
            print("<div>La variable " . '$iEntero' . " tiene un valor de <strong>$iEntero</strong> y es de tipo " . gettype($iEntero) . "</div>");
            print "<div>La variable " . '$fFlotante' . " tiene un valor de <strong>$fFlotante</strong> y es de tipo " . gettype($fFlotante) . '</div>';
            print '<div>La variable $sHilo tiene un valor de "<strong>' . $sHilo . '</strong>" y es de tipo ' . gettype($sHilo) . '</div>';


            printf("<h2>Usando printf</h2>");
            /*
             * printf imprime con formato definidos por un porcentaje y la letra correspondiente.
             * Es una función y siempre lleva paréntesis.
             * 
             * La función getttype() devuelve el nombre en string del tipo de la variable.
             */
            // %s = string
            printf('<div>La variable %s tiene un valor de "<strong>%s</strong>" y es de tipo %s</div>', '$sHilo', $sHilo, gettype($sHilo));
            // %b = integer en número binario. Los booleanos solo existen como 0 y 1.
            printf("<div>La variable %s tiene un valor de <strong>%b</strong> y es de tipo %s</div>", '$bBool', $bBool, gettype($bBool));
            /*
             * %b = integer en número binario.
             * %d = integer en número decimal con signo.
             * %u = integer en número decimal sin signo.
             * %o = integer en número octal.
             * %x o %X = integer en número hexadecimal (letra minúscula y mayúscula).
             * %e o %E = notación científica (letra minúscula y mayúscula).
             * %f = float tratado como número de punto flotante, considerando la configuración regional
             * %F = lo mismo, sin considerar la configuración regional.
             */
            //Prueba con integer.
            printf("<div>La variable %s, cuyo tipo que es %s corresponde al número <strong>%d</strong> en decimal, es: <ul>", '$iEntero', gettype($iEntero), $iEntero);
            printf("<li><span>%b</span> en binario</li><li><span>%o</span> en octal</li><li><span>%x</span> en hexadecimal</li>", $iEntero, $iEntero, $iEntero);
            printf("<li><span>%e</span> en notación científica</li><li><span>%f</span> en punto flotante</li></ul></div>", $iEntero, $iEntero);
            //Prueba con número float.
            printf("<div>La variable %s, cuyo tipo que es %s corresponde al número <strong>%F</strong>, es: <ul>", '$fFlotante', gettype($fFlotante), $fFlotante);
            printf("<li><span>%b</span> en integer binario</li><li><span>%o</span> en integer octal</li><li><span>%x</span> en integer hexadecimal</li>", $fFlotante, $fFlotante, $fFlotante);
            printf("<li><span>%e</span> en notación científica</li><li><span>%f</span> en punto flotante</li></ul></div>", $fFlotante, $fFlotante);

            print_r("<h2>Usando print_r</h2>");
            /*
             * Su función principal es imprimir el contenido de arrays.
             * Requiere paréntesis, es una función.
             */
            print_r('<div>La variable $bBool tiene un valor de <strong>' . $bBool . '</strong> y es de tipo ' . gettype($bBool) . '</div>');
            print_r("<div>La variable " . '$iEntero' . " tiene un valor de <strong>$iEntero</strong> y es de tipo " . gettype($iEntero) . "</div>");
            print_r("<div>La variable " . '$fFlotante' . " tiene un valor de <strong>$fFlotante</strong> y es de tipo " . gettype($fFlotante) . '</div>');
            print_r('<div>La variable $sHilo tiene un valor de "<strong>' . $sHilo . '</strong>" y es de tipo ' . gettype($sHilo) . '</div>');
            //Se puede juntar array y string, pero no muestra el contenido del array.
            print_r('<div>La variable $aArray, de tipo ' . gettype($aArray) . ' tiene un valor de <strong>' . $aArray . '</strong>:');
            /*
             * Para formatear la salida de print_r con array, se necesita la etiqueta
             * <pre> rodeándolo
             */
            echo '<pre>';
            print_r($aArray);
            echo '</pre></div>';

            echo ('<h2>Usando var_dump</h2>');
            /*
             * Muestra información sobre el contenido de las variables.
             */
            echo '<div>La variante $sHilo es tratada como un string:';
            var_dump($sHilo);
            echo '</div>';
            echo '<div>$iEntero:';
            var_dump($iEntero);
            echo '</div>';
            echo '<div>$fFlotante:';
            var_dump($fFlotante);
            echo '</div>';
            echo '<div>La variable $bBool se muestra directamente como su valor booleano, no integer:';
            var_dump($bBool);
            echo '</div>';
            echo '<div>Sobre la variable $aArray muestra información también de su contenido:';
            var_dump($aArray);
            echo '</div>';
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
