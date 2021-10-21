<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 20/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 13</title>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 20/10/2021
         * Fecha de última modificación: 20/10/2021
         * 
         * Librería de funciones personal.
         */

        /**
         * Comprueba si el número introducido es par o impar.
         * @param integer $iNum Número a comprobar.
         * @return boolean true si es par, false si es impar.
         */
        function esPar($iNum) {
            if ($iNum % 2 == 0) {
                return true;
            } else {
                return false;
            }
        }

        /**
         * Comprueba si un número es primo.
         * @param integer $iNum El número a comprobar si es primo.
         * @return boolean true si es primo, false si no lo es.
         */
        function esPrimo($iNum) {
            if ($iNum <= 1) {
                return false;
            }
            for ($iDiv = 2; $iDiv < $iNum; $iDiv++) {
                if ($iNum % $iDiv == 0) {
                    return false;
                }
            }
            return true;
        }

        /**
         * Crea un string con el factorial de un número.
         * @param integer $num El número a mostrar como multiplicación factorial.
         * @return string El string de la multiplicación factorial.
         */
        function show_factorial($num) {
            $sMult = '';
            for ($iToMult = 1; $iToMult < $num; $iToMult++) {
                $sMult .= $iToMult . ' * ';
            }
            return "$num! = $sMult$num = " . calculate_factorial($num);
        }

        /**
         * Calcula el factorial de un número dado.
         * @param integer $num El número cuyo factorial se calcula.
         * @return integer El factorial calculado del número introducido.
         */
        function calculate_factorial($num) {
            if ($num == 0) {
                $iFactorial = 0;
            } else {
                $iFactorial = 1;
            }
            for ($mult = 2; $mult <= $num; $mult++) {
                $iFactorial *= $mult;
            }
            return $iFactorial;
        }

        function comprobarFile($sFile) {
            $sReturn = 'El fichero '.$sFile.' ';
            if (file_exists($sFile)) {
                $sReturn.= 'existe, ';

                //Comprueba si es un archivo normal:
                $sReturn.= '<br>' . (is_file($sFile) ? 'es' : 'no es') . ' un archivo normal';

                //Comprueba si la dirección introducida es un directorio.
                $sReturn.= '<br>' . (is_dir($sFile) ? 'es' : 'no es') . ' un directorio';

                //Comprueba si es ejecutable.
                $sReturn.= '<br>' . (is_executable($sFile) ? 'es' : 'no es') . ' ejecutable';

                //Comprueba si es un link.
                $sReturn.= '<br>' . (is_link($sFile) ? 'es' : 'no es') . ' un link';

                //Comprueba si es legible.
                $sReturn.= '<br>' . (is_readable($sFile) ? 'es' : 'no es') . ' legible';

                //Comprueba si se puede escribir sobre él.
                $sReturn.= '<br>' . (is_writable($sFile) ? 'se puede' : 'no se puede') . ' escribir en él';

                //Comprueba si ha sido subido mediante HTTP POST
                $sReturn.= '<br>y ' . (is_uploaded_file($sFile) ? 'ha sido' : 'no ha sido') . ' subido mediante HTTP POST.';
            } else {
                $sReturn.= 'no existe, ';
            }
            return $sReturn;
        }
        ?>
    </body>
</html>
